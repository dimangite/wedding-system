<div class="form-group col-xs-8 wedding-for-guest hide">
    {!! Form::label('selected_wedding_id', 'import for wedding', ['class' => 'required']) !!}
    {!! Form::select('wedding_id', $weddings, null, ['class' => 'form-control', 'id' => 'selected_wedding_id']) !!}
</div>