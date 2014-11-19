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
            <span id="register" class= "float_right"><a href="#">Sign Up</a> </span> <span id="sign_in" class= "float_right"> <a href="login">Login</a></span>
        </ul>
    </nav>
    </div>


    <form class="login" method="POST" action="register">
        <h5>Sign Up</h5>
        <input type="text" name="username" class="login-input" placeholder="Enter Username" required="required" autofocus require>
        <input type="text" name="username" class="login-input" placeholder="Re-enter Username" required="required" autofocus require>
        <br>
        <input type="password" name="password" class="login-input" placeholder="Enter Password" required="required">
        <input type="password" name="password" class="login-input" placeholder="Re-enter Password" required="required">
        <input type="submit" value="Sign Up" class="login-submit">
        <p class="login-help"><a href="login">or Login</a></p>
    </form>



    </div>


</body>
</html>

