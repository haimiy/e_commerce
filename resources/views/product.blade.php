@extends('master')
@section('content')
<div class="custom-product">  <!-- Begining of slides -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <!-- Fetch data from database to make slides -->
  <div class="carousel-inner">
    @foreach($products as $item)
    <div class="item {{$item['id']==2?'active':''}}">
      <a href="detail/{{$item['id']}}">
      <img class="slider-img" src="{{$item['gallery']}}">
      <div class="carousel-caption slider-text">
        <h3>{{$item['name']}}</h3>
        <p>{{$item['description']}}</p>
      </div>
      </a>
    </div>
      @endforeach
 </div>
  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
  </div> <!-- End of slides -->

  <div class="trending-wrapper">
  <h3 class="text-center"><strong>Trending Products</strong></h3>
    @foreach($products as $item)
    <div class="trending-items">
    <a href="detail/{{$item['id']}}">
      <img class="trending-img" src="{{$item['gallery']}}">
        <h3>{{$item['name']}}</h3>
        </a>
    </div>
      @endforeach
 </div>
</div>
@endsection