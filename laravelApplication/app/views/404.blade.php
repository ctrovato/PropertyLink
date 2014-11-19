<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Property Link</title>
	<link rel="stylesheet"  href="{{URL::asset('css/style.css')}}" type="text/css">
	<link rel="stylesheet"  href="{{URL::asset('css/style3.css')}}" type="text/css">
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
			<li> <a href = "/">Homes</a></li>
			<li> <a href = "#">Apartments</a></li>
			<li> <a href = "#">Condos</a></li>
			<li> <a href = "#">Mortgages</a></li>
			<li> <a href = "#">Agents</a></li>
			<li> <a href = "#">Local</a></li>


			@if(Session::get('user'))
<span id="register" class= "float_right"><a href="register">Sign Up</a> </span> <span id="sign_in" class= "float_right"> <a href="logout">Logout</a></span>
			@else
<span id="register" class= "float_right"><a href="register">Sign Up</a> </span> <span id="sign_in" class= "float_right"> <a href="login">Login</a></span>
			@endif
		</ul>
	</nav>
	</div>

		<div class="pushDown">
			<h2>Error 404: Something went wrong...</h2>
		</div> <!-- pushdown -->

	</div>


</body>
</html>


