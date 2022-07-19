<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', ' Order Id:') !!}
    <p>{{ $order->id }}</p>
</div>

<!-- Product Field -->
<div class="form-group">
    {!! Form::label('product', 'Product:') !!}
    <p>{{ $order->product1->name }}</p>
</div>

<!-- Quantity Field -->
<div class="form-group">
    {!! Form::label('quantity', 'Quantity:') !!}
    <p>{{ $order->qty }}</p>
</div>

<!-- Price Field -->
<div class="form-group">
    {!! Form::label('price', 'Price:') !!}
    <p>{{ $order->price }}</p>
</div>

