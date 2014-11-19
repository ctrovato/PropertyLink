<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Property Link</title>
	<link rel="stylesheet"  href="{{URL::asset('css/style.css')}}" type="text/css">
	<link rel="shortcut icon" href="images/TabLogo.png">
</head>
<body>
	<div class="navigation">
	<nav>
		<div id="box">
			<a href="/"><h1>Property Link</h1></a>
		</div>
		<ul class="float_left" id="nav_list">
			<li> <a href = "/">Homes</a></li>
			<li> <a href = "#">Apartments</a></li>
			<li> <a href = "#">Condos</a></li>
			<li> <a href = "#">Mortgages</a></li>

			@if(Session::get('user'))
<span id="register" class= "float_right"><a href="register">Sign Up</a> </span> <span id="sign_in" class= "float_right"> <a href="logout">logout</a></span>
			@else
<span id="register" class= "float_right"><a href="register">Sign Up</a> </span> <span id="sign_in" class= "float_right"> <a href="login">Login</a></span>
			@endif
		</ul>
	</nav>
	</div>
<!-- <h5>{{ date('M d, Y')}}.</h5> -->


<div class="pushDown">
	<div class="floatDiv">
		<div class="propertyDetails">
			<img src="{{$googleStreet}}" alt="" height="150" width="250">
			<a href=""><h4 class="address">{{ $streetAddress }}</h4><h4 class="address">{{ $city }}, {{ $state }} {{ $zipCode }}</h4></a>
			<br>
			<p>{{ $bedrooms }} Bed , {{ $bathrooms }} Bath </p>
			<p>Year Built: {{ $yearBuilt }}</p>
			<p>Year Updated: {{ $yearBuilt }}</p>
			<p>Number of Floors: {{ $numFloors }}</p>
			<p>Basement: {{ $basement }}</p>
			<p>Roof Description: {{ $roof }}</p>
			<p>View: {{ $view }}</p>
			<p>Parking: {{ $parkingType }}</p>
			<p>Heating Source: {{ $heatingSource }}</p>
			<p>Heating System: {{ $heatingSystem }}</p>
			<p>Rooms: {{ $rooms}}</p>
			<p>Neighborhood: {{ $neighborhood}}</p>
			<p>School District: {{ $schoolDistrict}}</p>
			<p>Elementary School: {{ $elementarySchool}}</p>
			<p>Middle School: {{ $middleSchool}}</p>
		</div>
	</div><!--  float -->

	<div class="fixed">
		<iframe
		  width="850"
		  height="500"
		  frameborder="0" style="border:0"
		  src="{{$googleMap}}">
		</iframe>
	</div>
</div> <!-- pushdown -->



</body>
</html>


