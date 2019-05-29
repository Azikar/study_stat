<html>
    <head>
        <title>@yield('title')</title>
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" >
        <link href="{{ asset('css/circular_progress.css') }}" rel="stylesheet" type="text/css" >
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>