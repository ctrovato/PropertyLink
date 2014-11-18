<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Property Link</title>
	<link rel="stylesheet"  href="{{URL::asset('css/style.css')}}" type="text/css">
</head>
<body>
<div class="navigation">
		<h1><a href="/">Property Link</a></h1>
</div>
<!-- <h5>{{ date('M d, Y')}}.</h5> -->


<div class="pushDown">
	<div class="floatDiv">
		<div class="searchDetails">
			<img src="" alt="" height="150" width="250">
			<a href=""><h4 class="address">{{ $result->wholeAddress }}</h4><h4 class="address">{{ $city }}, {{ $state }} {{ $zipCode }}</h4></a>

			<p>Bed {{ $result->bedrooms }}, Bath {{ $result->bathrooms }}</p>
			<p>Built: {{ $result->yearBuilt }}</p>
			<p>Lot Square Ft: {{ $result->lotSizeSqFt }}</p>
			<p>Last Re-Sale Date: {{ $result->lastSoldDate }}</p>
			<p>Last Re-Sale Price: {{ $result->lastSoldPrice }}</p>
			<p>Listing Price: {{ $result->askingPrice }}</p>
		</div>
	</div><!--  float -->


	<div class="fixed">
		<h2></h2>
	</div>
</div> <!-- pushdown -->



</body>
</html>


