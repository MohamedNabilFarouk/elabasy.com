<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $productGallery->id }}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    <img src="{{asset('images/'.$productGallery->image)}}" style="width:30%">
</div>

<!-- Product Id Field -->
<div class="form-group">
    {!! Form::label('product', 'Product :') !!}
    <p>{{ $productGallery->products->name }}</p>

</div>

