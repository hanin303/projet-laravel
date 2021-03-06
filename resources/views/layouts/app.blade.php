<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> E-Commerce Website</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/PanierStyle.css') }}" rel="stylesheet">
    
</head>
<body>
        <div>
            @include('layouts.NavBar')
        </div>
        <div class="container" >
               <main class="py-4" id="body">
                    @yield('content')
                </main>
        </div>
    <footer>    
        <div class="footer-copyright text-center py-5 ">© 2020 Copyright:
             <a href="https://mdbootstrap.com/" > MDBootstrap.com</a>
        </div>
    </footer>

</body>


</html>
