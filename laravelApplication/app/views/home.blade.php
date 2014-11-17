<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Property Link</title>
	<link rel="stylesheet"  href="{{URL::asset('css/style.css')}}" type="text/css">
		<link rel="stylesheet"  href="{{URL::asset('css/style2.css')}}" type="text/css">
	<link rel="shortcut icon" href="images/TabLogo.png">
</head>
  <body>

  <div class="container">

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

		<form method="POST" action="results">
			<div class="boxbox">
				<input autofocus class="search" type="text" name="zip" placeholder="Enter Zipcode"/>
				<input class="submit" type="submit" value="SEARCH"/>
			</div>
		</form>

	</div>


</body>
</html>


