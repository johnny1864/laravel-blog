<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> {{config('app.name', 'Blog App')}} </title>
        
    </head>
    <body>
        <h1>Welcome to Blog</h1>
        <p>This is a blog made with Laravel</p>
    </body>
</html>