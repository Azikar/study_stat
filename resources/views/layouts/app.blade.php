<html>
    <head>
        <title>@yield('title')</title>
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" >
        <link href="{{ asset('css/circular_progress.css') }}" rel="stylesheet" type="text/css" >
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>