@extends('master')
@section('content')
  <!-- Fetch data from database to make slides -->
  <div class="custom-product">
    
    <div class="col-sm-10">
    <div class="trending-wrapper">
  <h3 class="text-center"><strong>My Orders</strong></h3>

  <br><br><br>
    @foreach($orders as $item)
    <div class="row seached-items cart_list_divider">
    <div class="col-sm-3">
    <a href="detail/{{$item->id}}">
      <img class="trending-img" src="{{$item->gallery}}">
    </a>
    </div>

    <div class="col-sm-3">
    <div>
        <h2>Name : {{$item->name}}</h2>
        <h5>Delivery Status : {{$item->status}}</h5>
        <h5>Address : {{$item->address}}</h5>
        <h5>Payment Method : {{$item->payment_method}}</h5>
        <h5>Payment Status : {{$item->payment_status}}</h5>
    </div>
    </div>

    </div>
      @endforeach
 </div>
    </div>
</div>
@endsection