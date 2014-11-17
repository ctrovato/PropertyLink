<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign-Up: A Laravel Form</title>
    <style>
        label {
            display: block;
            padding-top: 1em;
        }
        input[type="submit"] {
            display: block;
            margin-top: 2em;
        }
        textarea {
            display: block;
            margin-bottom: 1em;
        }
        input[type="checkbox"] {
            display: inline-block;
            margin-top: 1em;
        }
        label[for="agree"] {
            display: inline;
        }

    </style>
</head>

<body>
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
</body>
</html>