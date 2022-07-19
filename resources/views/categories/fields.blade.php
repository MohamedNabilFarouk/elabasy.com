<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', isset($category)? $category->name :null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('name_ar', 'Name Ar:') !!}
    {!! Form::text('name_ar', isset($category)? $category->name_ar :null, ['class' => 'form-control']) !!}
</div>

<!-- Des Field -->
<div class="form-group col-sm-6">
    {!! Form::label('des', 'Des:') !!}
    {!! Form::text('des', isset($category)? $category->des :null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('des Ar', 'Des Ar:') !!}
    {!! Form::text('des_ar',isset($category)? $category->des_ar :null, ['class' => 'form-control']) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
   
    <input type="file" name="image" value="{{$category->image ?? null}}">
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('categories.index') }}" class="btn btn-secondary">Cancel</a>
</div>
