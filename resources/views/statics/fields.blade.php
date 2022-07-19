<!-- Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('code', 'Code:') !!}
    {!! Form::text('code', null, ['class' => 'form-control']) !!}
</div>

<!-- Value Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('value', 'Value:') !!}
    {!! Form::textarea('value', isset($statics)? $statics->value :null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('Ar', 'Ar:') !!}
    {!! Form::textarea('ar', isset($statics)? $statics->ar :null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('statics.index') }}" class="btn btn-secondary">Cancel</a>
</div>
