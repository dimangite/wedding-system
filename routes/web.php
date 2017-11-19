<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function() {
	return redirect('/');
});

Auth::routes();

/*
|--------------------------------------------------------------------------
| Admin routes
|--------------------------------------------------------------------------
*/
Route::group([
	'middleware' => 'auth'
], function() {
	Route::get('/', 'HomeController@index');

	Route::resource('guests', 'GuestController');
	Route::resource('weddings', 'WeddingController');
	Route::resource('expenses', 'ExpenseController');
	Route::resource('expense_details', 'ExpenseDetailController');

	Route::group([
		'prefix' => 'expense_details'
	], function() {
		Route::get('/{expense}/create', 'ExpenseDetailController@create');
	});

	Route::resource('guest_groups', 'GuestGroupController');
    Route::resource('users', 'UserController');
});