<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Property Link</title>
	<link rel="stylesheet"  href="{{URL::asset('css/style.css')}}" type="text/css">
	<link rel="shortcut icon" href="images/TabLogo.png">
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&language=ja"></script>
	<script src="geolocation.js"></script>
</head>
<body>
	<div class="navigation">
	<nav>
		<div id="box">
			<a href="/"><h1>Property Link</h1></a>
		</div>
		<ul class="float_left" id="nav_list">
			<li> <a href = "#">Homes</a></li>
			<li> <a href = "#">Apartments</a></li>
			<li> <a href = "#">Condos</a></li>
			<li> <a href = "#">Mortgages</a></li>


			@if(Session::get('user'))
<span id="register" class= "float_right"><a href="register">Sign Up</a> </span> <span id="sign_in" class= "float_right"> <a href="logout">Logout</a></span>
			@else
<span id="register" class= "float_right"><a href="register">Sign Up</a> </span> <span id="sign_in" class= "float_right"> <a href="login">Login</a></span>
			@endif
		</ul>
	</nav>
	</div>

<!-- <h5>{{ date('M d, Y')}}.</h5> -->

<div class="searchZip">
	<h3 class="listingZip">Listings in "{{ $zipCode }}" on {{ date('M d, Y')}}</h3>
</div>


<div class="pushDown">
	<div class="floatDiv">
	@foreach($searchResults as $result)
		<div class="searchDetails">
			<img src="{{$result->googleStreet}}" height="150" width="250">
			<a href="propertyResult?zpid={{ $result->zpid }}"><h4 class="address">{{ $result->wholeAddress }}</h4><h4>{{ $city }}, {{ $state }} {{ $zipCode }}</h4></a>

			<p>{{ $result->bedrooms }} Bed , {{ $result->bathrooms }} Bath </p>
			<p>Built: {{ $result->yearBuilt }}</p>
			<p>Lot Square Ft: {{ $result->lotSizeSqFt }}</p>
			<p>Last Sale Date: {{ $result->lastSoldDate }}</p>
			<p>Last Sale Price: ${{ $result->lastSoldPrice }}.00</p>
			<p>Listing Price: ${{ $result->asking }}.00</p>
		</div>
	@endforeach
	</div><!--  float -->


	<div class="fixed">
		<div id="map-canvas"></div>
<!-- 		<iframe
		  width="850"
		  height="500"
		  frameborder="0" style="border:0"
		  src="{{$result->googleMap}}">
		</iframe> -->
	</div>
</div> <!-- pushdown -->



</body>
</html>


