<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    
    </head>
    <body class="antialiased">
        <h1>About cats</h1>
        <p>My cat {{$name}} is crazy and I think he is not frendly</p>
        <p>One time he jumped on my german shepherds back and ride like on the horse </p>
        <p>Now my dog is dealing with {{$illness}}...</p>
    </body>
</html>