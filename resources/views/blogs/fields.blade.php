<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>


<div class="form-group col-sm-6">
    {!! Form::label('title_ar', 'Title Ar:') !!}
    {!! Form::text('title_ar', null, ['class' => 'form-control']) !!}
</div>

<!-- Des Field -->
<div class="form-group col-sm-6">
    {!! Form::label('des', 'Des:') !!}
    {!! Form::text('des', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('des_ar', 'Des_ar:') !!}
    {!! Form::text('des_ar', null, ['class' => 'form-control']) !!}
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
    <a href="{{ route('blogs.index') }}" class="btn btn-secondary">Cancel</a>
</div>
