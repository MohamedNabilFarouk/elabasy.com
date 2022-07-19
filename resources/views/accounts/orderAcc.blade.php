@extends('layouts.app')
@section('content')

     <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('orders.index') }}">Order</a>
            </li>
            <li class="breadcrumb-item active">Detail</li>
     </ol>
     <div class="container-fluid">
     <a href="javascript:window.print();"><i class="fa fa-print fa-lg">  Print</i></a>
    
     <table class="table">
     <thead>
    <tr>
    <th>Name: {{$account->name}}</th>
  <th>phone: {{$account->phone}}</th>  
  <th>Address: {{$account->address}}</th>
    </tr>

     </thead>
     
     <thead>
    
  <tr>
      <!-- <th scope="col">#</th> -->
      <th scope="col">Product</th>
      <th scope="col">Quantity</th>
      <th scope="col">price</th>
       <th scope="col">Image</th>
    </tr>
  </thead>
  <tbody>
  @foreach($allorder->orders as $o)   
    <tr>

    <td>{{$o->product1->name ?? 'Deleted Product'}}</td>
      <td>{{$o->qty}}</td>
      <td>{{($o->price)*($o->qty)}}</td>
      <td><img src="{{asset('images/'.($o->product1->image ?? Null))}}" style="width:10%"></td>
    
    </tr>
    @endforeach
  </tbody>
</table>
<img class="navbar-brand-minimized" src="{{asset('assets/images/logo.png')}}" style="margin:auto" width="20%"
             height="20%" alt="Logo">
    </div>
@endsection
