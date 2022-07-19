
<!-- Id Field -->
<!-- <div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <h3>{{ $product->id }}</h3>
</div> -->

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <h3>{{ $product->name }}</h3>
</div>

<div class="form-group">
    {!! Form::label('name ar', 'Name Ar:') !!}
    <h3>{{ $product->name_ar }}</h3>
</div>

<!-- Des Field -->
<div class="form-group">
    {!! Form::label('des', 'Description:') !!}
    <p>{{ $product->des }}</p>
</div>
<div class="form-group">
    {!! Form::label('des ar', 'Description Ar:') !!}
    <p>{{ $product->des_ar }}</p>
</div>


<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    <img src="{{asset('/images/'.$product->image )}} "style="width:20%">
</div>

<!-- Category Id Field -->
<div class="form-group">
    {!! Form::label('category', 'Category :') !!}
    <h3>{{ $product->category->name }}</h3>
</div>

<div class="form-group">
{!! Form::label('price', 'price :') !!}
    <h3>{{ $product->price }}</h3>

</div>

<div class="form-group">
{!! Form::label('price', 'price :') !!}
    <h3>{{ $product->price }} $</h3>

</div>


<div class="form-group">
{!! Form::label('offer price', 'Offer Price :') !!}
    <h3>{{ $product->offer_price }}</h3>
</div>

@if($product->deal== 1)
<div class="form-group">
{!! Form::label('deal price', 'Deal Price :') !!}
    <h3>{{ $product->deal_price }}</h3>
</div>
@endif
