@extends('master')
@section('content')
  <!-- Fetch data from database to make slides -->
  <div class="custom-product">
    
    <div class="col-sm-10">
    <div class="trending-wrapper">
  <h3 class="text-center"><strong>Product List</strong></h3>
  <a class="btn btn-success" href="order_now">Order Now</a>
  <br><br><br>
    @foreach($products as $item)
    <div class="row seached-items cart_list_divider">
    <div class="col-sm-3">
    <a href="detail/{{$item->id}}">
      <img class="trending-img" src="{{$item->gallery}}">
    </a>
    </div>

    <div class="col-sm-3">
    <div>
        <h2>{{$item->name}}</h2>
        <h5>{{$item->description}}</h5>
    </div>
    </div>

    <div class="col-sm-4 text-center">
    <a href="/remove_cart/{{$item->cart_id}}" class="btn btn-danger">Remove To Cart</button></a>
    </div>
    </div>
      @endforeach
 </div>
 <a class="btn btn-success" href="order_now">Order Now</a>

    </div>
</div>
@endsection