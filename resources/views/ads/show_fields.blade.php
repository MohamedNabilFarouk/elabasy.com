<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $ads->id }}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    <img src="/images/{{ $ads->image }}" style="width:20%;">
</div>

<!-- Link Field -->
<div class="form-group">
    {!! Form::label('link', 'Link:') !!}
    <p>{{ $ads->link }}</p>
</div>

