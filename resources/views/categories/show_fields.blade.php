<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $category->id }}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $category->name }}</p>
</div>
<div class="form-group">
    {!! Form::label('name', 'Name Ar:') !!}
    <p>{{ $category->name_ar }}</p>
</div>

<!-- Des Field -->
<div class="form-group">
    {!! Form::label('des', 'Des:') !!}
    <p>{{ $category->des }}</p>
</div>
<div class="form-group">
    {!! Form::label('des', 'Des Ar:') !!}
    <p>{{ $category->des_ar }}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    <img src="/images/{{$category->image}}" style="width:10%" >
</div>

