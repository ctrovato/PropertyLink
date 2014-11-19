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
            <li> <a href = "/">Homes</a></li>
            <li> <a href = "#">Apartments</a></li>
            <li> <a href = "#">Condos</a></li>
            <li> <a href = "#">Mortgages</a></li>
            <span id="register" class= "float_right"><a href="register">Sign Up</a> </span> <span id="sign_in" class= "float_right"> <a href="#">Login</a></span>
        </ul>
    </nav>
    </div>


    <form class="login" method="POST" action="login">
        <h5>Login</h5>
        <input type="text" name="username" class="login-input" placeholder="Username" required="required" autofocus require>
        <input type="password" name="password" class="login-input" placeholder="Password" required="required">
        <input type="submit" value="Login" class="login-submit">
        <p class="login-help"><a href="#">Forgot password?</a></p>
    </form>



    </div>


</body>
</html>

