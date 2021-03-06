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
    <link href="{{ asset('css/dashboard_Admin.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  <script src="https://kit.fontawesome.com/3a7c0ab2e8.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

</head>
<body>
    <div  id="app">
          @include('layouts.NavBar')
         <div class="container">   
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
                    </div>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                          <a class="nav-link active" href="/admin">
                            <span><i class="fas fa-home"></i></span>
                           Dashboard <span class="sr-only">(current)</span>
                          </a>
                        </li>
                         <li class="nav-item">
                           <a class="nav-link" href="/admins">
                            <span><i class="fas fa-user-shield"></i></span>
                             Admins 
                            </a>
                          </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">
                            <span><i class="fas fa-share-square"></i></span>
                            Orders
                          </a>
                        </li>
                        <li class="nav-item">
            <a class="nav-link" href="/produits">
              <span><i class="fas fa-shopping-cart"></i></span>
              Products
            </a>
          </li>
                        <li class="nav-item">
                          <a class="nav-link" href="/clients">
                            <span><i class="fas fa-users"></i></span>
                            Clients
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">
                            <span><i class="fas fa-file-alt"></i></span>
                            Reports
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">
                             <span><i class="fab fa-adversal"></i></span>
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
                            <span><i class="fas fa-calendar-alt"></i></span>
                            Current month
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">
                            <span><i class="fas fa-calendar-plus"></i></span>
                            Last quarter
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">
                            <span><i class="fab fa-twitter-square"></i></span>
                            Social engagement
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">
                            <span><i class="fab fa-salesforce"></i></span>
                            Year-end sale
                          </a>
                        </li>
                      </ul>
                </div>
            </nav>
            


            <main class="container py-4">

            @yield('content')
        </main>
      </div> 
      </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.6/assets/js/vendor/jquery.min.js"><\/script>')</script><script src="/docs/4.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
        <script src="{{ asset('js/admin.js') }}"></script>
</body>
</html>
