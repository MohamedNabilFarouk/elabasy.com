<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $stock->id }}</p>
</div>

<!-- Product Id Field -->
<div class="form-group">
    {!! Form::label('product_id', 'Product Id:') !!}
    <p>{{ $stock->product_id }}</p>
</div>

<!-- Size Id Field -->
<div class="form-group">
    {!! Form::label('size_id', 'Size Id:') !!}
    <p>{{ $stock->size_id }}</p>
</div>

<!-- Color Id Field -->
<div class="form-group">
    {!! Form::label('color_id', 'Color Id:') !!}
    <p>{{ $stock->color_id }}</p>
</div>

<!-- Stock Field -->
<div class="form-group">
    {!! Form::label('stock', 'Stock:') !!}
    <p>{{ $stock->stock }}</p>
</div>

