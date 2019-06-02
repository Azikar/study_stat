<html>
    <head>
        <title>@yield('title')</title>
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" >
        <link href="{{ asset('css/circular_progress.css') }}" rel="stylesheet" type="text/css" >
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{csrf_token()}}">
        <script> window.Laravel = { csrfToken: '{{ csrf_token() }}'}</script>
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
    <script src="{{ asset('js/app.js')}}"></script>
    </body>
</html>