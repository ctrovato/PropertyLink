<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Property Link</title>
	<link rel="stylesheet"  href="{{URL::asset('css/style.css')}}" type="text/css">
	<link rel="shortcut icon" href="images/BrowserLogo.png">
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
				<span id="register" class= "float_right"><a href="#">Sign Up</a> </span> <span id="sign_in" class= "float_right"> <a href="#">Log In</a></span>
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
			<a href="propertyResult"><h4 class="address">{{ $result->wholeAddress }}</h4><h4>{{ $city }}, {{ $state }} {{ $zipCode }}</h4></a>

			<p>Bed {{ $result->bedrooms }}, Bath {{ $result->bathrooms }}</p>
			<p>Built: {{ $result->yearBuilt }}</p>
			<p>Lot Square Ft: {{ $result->lotSizeSqFt }}</p>
			<p>Last Re-Sale Date: {{ $result->lastSoldDate }}</p>
		</div>
	@endforeach
	</div><!--  float -->


	<div class="fixed">
		<h2></h2>
	</div>
</div> <!-- pushdown -->



</body>
</html>


