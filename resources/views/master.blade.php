<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>E-comm</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	@include('header')
	@yield('content')
	{{View::make('footer')}}
	
</body>
<!-- <script type="text/javascript">
	$(document).ready(function(){
		$("button").click(function(){
			alert("all set")
		})
	})
</script> -->
<style type="text/css">
	.custom-login{
		height: 400px;
		padding-top: 100px;
	}
	img.slider-img{
		height: 600px !important;
	}
	.custom-product{
		height: 1000px;	
	}
	.slider-text{
		background: #35443585 !important;
	}
	.trending-img{
		height: 300px;
	}
	.trending-items{
		float: left;
		width: 20%;
	}
	.detail-img{
		height: 400px;
	}
	.search-box{
		width: 500px !important;
	}
</style>
</html>