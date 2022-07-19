<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $blogs->id }}</p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $blogs->title }}</p>
</div>

<div class="form-group">
    {!! Form::label('title', 'Title Ar:') !!}
    <p>{{ $blogs->title_ar }}</p>
</div>
<!-- Des Field -->
<div class="form-group">
    {!! Form::label('des', 'Des:') !!}
    <p>{{ $blogs->des }}</p>
</div>

<div class="form-group">
    {!! Form::label('des', 'Des Ar:') !!}
    <p>{{ $blogs->des_ar }}</p>
</div>
<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    <img src="/images/{{ $blogs->image }}" style="width:20%;">
</div>

