<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Property Link</title>
	<link rel="stylesheet"  href="{{URL::asset('css/style.css')}}" type="text/css">
		<link rel="stylesheet"  href="{{URL::asset('css/style2.css')}}" type="text/css">
	<link rel="shortcut icon" href="images/BrowserLogo.png">
</head>
  <body>
    <div class="container">
		<!-- <h5>{{ date('M d, Y')}}.</h5> -->
	<div class="navigation">
		<a href="/"><h1>Property Link</h1></a>
	</div>

		<form method="POST" action="results">
			<div class="boxbox">
				<input class="search" type="text" name="zip" placeholder="Enter Zipcode"/>
				<input class="submit" type="submit" value="SEARCH"/>
			</div>
		</form>

	</div>


</body>
</html>


