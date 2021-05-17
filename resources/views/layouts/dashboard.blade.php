<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> E-Commerce Website
         <!--{{ config('app.name','Laravel') }}-->  </title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dashboard_Admin.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>
<body>
    <div id="app">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <!--{{ config('app.name', 'Laravel') }}-->
                    E-Commerce Website 
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="container py-4">
             
            <nav class="pcoded-navbar">
                <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                <div class="pcoded-inner-navbar main-menu">
                    <div class="">
                        <div class="main-menu-header">
                            <img class="img-40 img-radius" src="assets/images/avatar-4.jpg" alt="User-Profile-Image">
                            <div class="user-details">
                                <span>Hanin ben jemaà </span>
                                <span id="more-details"> Admin full Control <i class="ti-angle-down"></i></span>
                            </div>
                        </div>

                        <div class="main-menu-content">
                            <ul>
                                <li class="more-details">
                                    <a href="#"><i class="ti-user"></i>View Profile</a>
                                    <a href="#!"><i class="ti-settings"></i>Settings</a>
                                    <a href="auth-normal-sign-in.html"><i class="ti-layout-sidebar-left"></i>Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                          <a class="nav-link active" href="/admin">
                            <span data-feather="home"></span>
                            Dashboard <span class="sr-only">(current)</span>
                          </a>
                        </li>
                        <li class="nav-item">
                  <a class="nav-link" href="/admins">
                              <span data-feather="file-text"></span>
                             Admins
                            </a>
                          </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">
                            <span data-feather="file"></span>
                            Orders
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">
                            <span data-feather="shopping-cart"></span>
                            Products
                        </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">
                            <span data-feather="clients"></span>
                            Clients
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">
                            <span data-feather="bar-chart-2"></span>
                            Reports
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">
                            <span data-feather="layers"></span>
                            Integrations
                          </a>
                        </li>
                      </ul>
              
                      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Saved reports</span>
                        <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
                          <span data-feather="plus-circle"></span>
                        </a>
                      </h6>
                      <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                          <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            Current month
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            Last quarter
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            Social engagement
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            Year-end sale
                          </a>
                        </li>
                      </ul>
                </div>
            </nav>
            



            @yield('content')
        </main>
    </div>
</body>
</html>
