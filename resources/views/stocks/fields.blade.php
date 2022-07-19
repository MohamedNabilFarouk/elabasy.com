<!-- Product Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product_id', 'Product Id:') !!}
    {!! Form::select('product_id', ['' => ''], null, ['class' => 'form-control']) !!}
</div>

<!-- Size Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('size_id', 'Size Id:') !!}
    {!! Form::select('size_id', ['' => ''], null, ['class' => 'form-control']) !!}
</div>

<!-- Color Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('color_id', 'Color Id:') !!}
    {!! Form::select('color_id', ['' => ''], null, ['class' => 'form-control']) !!}
</div>

<!-- Stock Field -->
<div class="form-group col-sm-6">
    {!! Form::label('stock', 'Stock:') !!}
    {!! Form::number('stock', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('stocks.index') }}" class="btn btn-secondary">Cancel</a>
</div>
