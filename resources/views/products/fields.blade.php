<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', isset($product)? $product->name :null , ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('name_ar', 'Name Ar:') !!}
    {!! Form::text('name_ar',isset($product)? $product->name_ar :null, ['class' => 'form-control']) !!}
</div>

<!-- Des Field -->
<div class="form-group col-sm-6">
    {!! Form::label('des', 'Des:') !!}
    {!! Form::text('des', isset($product)? $product->des :null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('des_ar', 'Des Ar:') !!}
    {!! Form::text('des_ar',  isset($product)? $product->des_ar :null , ['class' => 'form-control']) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
   <input type="file" name="image" multiple >
</div>
<div class="clearfix"></div>

<!-- Category Id Field -->

<div class="form-group col-sm-6">
<select class="form-select" name='category_id' aria-label="Select example" id='sel_cat'>
                       @foreach($category as $c)
                        <option value="{{$c->id}}" @if(isset($product) && $c->id == $product->category_id) selected @endif>{{$c->name_ar ?? $c->name}}</option>
                       @endforeach
                    </select>

</div>

<!-- brand Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('brand_id', 'Brand:') !!}
    <select class="form-select" name='brand_id' id='sel_brand' aria-label="Select example">
        @foreach($brand as $c)
         <option value="{{$c->id}}" @if(isset($product) && $c->id == $product->brand_id) selected @endif >{{$c->name ?? $c->name_ar}}</option>
        @endforeach
     </select>
</div>

<!-- price  Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price', 'Price:') !!}
  
<input type="number" name="price" class="form-control" value="{{$product->price ?? 0}}"  required >   

</div>

<!-- offer price  Field -->
<div class="form-group col-sm-6">
    {!! Form::label('offer price', 'Offer Price:') !!}
  
<input type="number" name="offer_price" class="form-control" value="{{$product->offer_price ?? 0}}" >   
</div>

<!-- on sale Field -->
<div class="form-group col-sm-6">
   <label>On Sale </label>
    <input type="radio"  name="on_sale" value="1"<?php  if(isset($product->on_Sale)==1) echo 'checked'?> required="required"   /> yes
                        <input type="radio" name="on_sale" value="0"<?php if(isset($product->on_Sale)==0) echo 'checked'?> required="required"   />No
</div>

<!-- home Field -->
<div class="form-group col-sm-6">
   <label>Home Page  </label>
    <input type="radio"  name="home" value="1" <?php  if(isset($product->home)==1) echo 'checked'?> required="required"  /> yes
                        <input type="radio" name="home" value="0" <?php  if(isset($product->home)==1) echo 'checked'?> required="required"  />No
</div>


<!-- deal Field -->
<div class="form-group col-sm-6">
   <label>Deal</label>
    <input type="radio"  name="deal" value="1" <?php  if(isset($product->deal)==1) echo 'checked'?>   /> yes
    <input type="radio" name="deal" value="0" <?php  if(isset($product->deal)==1) echo 'checked'?>  />No
</div>

<!-- deal date -->
<div class="form-group col-sm-6">
   <label>Deal date</label>
    <input type="date"  name="deal_date"  value="{{$product->deal_date ?? null}}" /> 
   
</div>

<!-- deal price  Field -->
<div class="form-group col-sm-6">
    {!! Form::label('deal price', 'Deal Price:') !!}
  
<input type="number" name="deal_price" class="form-control" value="{{$product->deal_price ?? null}}" >   
</div>


<!-- quantity  Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Quantity', 'Quantity:') !!}
  
<input type="number" name="quantity" class="form-control" value="{{$product->quantity ?? null}}"  required >   
</div>


<!-- Image gallery Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Gallery:') !!}
   <input type="file" name="gallery[]" multiple >
</div>
<div class="clearfix"></div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
</div>






