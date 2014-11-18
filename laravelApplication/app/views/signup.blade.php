<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Property Link</title>
    <link rel="stylesheet"  href="{{URL::asset('css/style.css')}}" type="text/css">
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

<h3>Newsletter Sign Up</h3>
{{ Form::open(array('url'=>'thanks'))}}
    {{ Form::label('email', 'Email Address') }}
    {{ Form::text('email') }}

    {{ Form::label('os', 'Opperationg System') }}
    {{ Form::select('os', array(
        'linux' => 'Linux',
        'mac' => 'OS X',
        'windows' => 'Windows',
    ))}}

    {{ Form::label('comment', 'Comments') }}
    {{ Form::textarea('comment', '', array('placeholder' => 'What are your interests?')) }}

    {{ Form::checkbox('agree','yes',false) }}
    {{ Form::label('agree', 'I agree to terms and conditions') }}

    {{ Form::submit('Sign Up') }}

{{ Form::close() }}

    </div>


</body>
</html>

