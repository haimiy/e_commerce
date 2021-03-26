@extends('master')
@section('content')
<div class="container">
<div class="row">
<div class="col-sm-6">
<img class="detail-img" src="{{$product['gallery']}}">
</div>
<div class="col-sm-6">
<a href="/">GO BACK</a>
<h2>{{$product['name']}}</h2>
<h3>Price: {{$product['price']}}</h3>
<h3>Quantity: {{$product['quantity']}}</h3>
<h4>Details: {{$product['description']}}</h4>
<br><br>
<!-- <form action="/add_to_cart" method="POST"> -->
@csrf
<input type="hidden" name="product_id" id="product_id" value="{{$product['id']}}">
<button class="btn btn-primary" id="add_btn" onclick="add_to_cart()">Add to Cart</button>
<!-- </form> -->
<br><br>   
<button class="btn btn-success" >Buy Now</button>
</div>
</div>

</div>
<script type="text/javascript">
	let _token = $('meta[name="csrf-token"]').attr('content');
	function add_to_cart() {
		let product_id = $('#product_id').val();
		$('#add_btn').html('<img src="/img/loading.svg" style="height: 20px;"> Processing...');
		$.post('/add_to_cart',{'product_id':product_id,'_token': _token},function(data,status){
			$('#total_cart').html(data);
			$('#add_btn').html('Add to Cart');

		});
	}
</script>
@endsection
