<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $slider->id }}</p>
</div>

<!-- Text Field -->
<div class="form-group">
    {!! Form::label('text', 'Text:') !!}
    <p>{{ $slider->text }}</p>
</div>
<div class="form-group">
    {!! Form::label('text Ar', 'Text Ar:') !!}
    <p>{{ $slider->text_ar }}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    <img src="{{asset("images/" .$slider->image) }}" style="width:30%">
</div>

