<!-- Text Field -->
<div class="form-group col-sm-6">
    {!! Form::label('text', 'Text:') !!}
    {!! Form::text('text', isset($slider)? $slider->text :null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('text ar', 'Text Ar:') !!}
    {!! Form::text('text_ar', isset($slider)? $slider->text_ar :null, ['class' => 'form-control']) !!}
</div>
<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::file('image') !!}
</div>
<div class="clearfix"></div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('sliders.index') }}" class="btn btn-secondary">Cancel</a>
</div>
