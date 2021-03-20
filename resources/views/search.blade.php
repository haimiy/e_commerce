@extends('master')
@section('content')
  <!-- Fetch data from database to make slides -->
  <div class="custom-product">
    <div class="col-sm-4">
    <a href="#">Filter</a>
    </div>
    <div class="col-sm-4">
    <div class="trending-wrapper">
  <h3 class="text-center"><strong>Searched items</strong></h3>
    @foreach($products as $item)
    <div class="seached-items">
    <a href="detail/{{$item['id']}}">
      <img class="trending-img" src="{{$item['gallery']}}">
        <h2>{{$item['name']}}</h2>
        <h5>{{$item['description']}}</h5>
        </a>
    </div>
      @endforeach
 </div>
    </div>
</div>
@endsection