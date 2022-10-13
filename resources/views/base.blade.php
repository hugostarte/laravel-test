<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
                padding: 0;
                margin: 0;
            }
            .navbar{
                width: 100%;
                text-align: center;
                background: rgb(1, 33, 87);
                padding: 20px 50px;
            }
            .navbar a { 
                padding: 20px 50px;
                font-size: 1em;
                text-decoration: none;
                color: white;s
            }
            .navbar a:hover { 
                text-decoration:underline;
            }
            .container{
                width: 90%;
                margin: auto;
            }
        </style>
        <link rel="stylesheet" type="text/css" href="../css/app.css">
        <title>Laravel</title>
    </head>

    <body class="antialiased">
        @include('navbar')
        @yield('content')
    </body>
</html>
