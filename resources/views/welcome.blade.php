@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>M-Dev Store</title>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script src="https://kit.fontawesome.com/3a7c0ab2e8.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        /* General Styles */

        body {
            font-size: 14px;
            line-height: 1.42857143;
            color: #333333;
            background: #f0f0f0;
            overflow-x: hidden;
        }

        /* Top Styles */

        #top {
            background: #555555;
            padding: 10px 0;
        }

        #top .offer {
            color: #ffffff;
        }

        #top .offer .btn {
            text-transform: uppercase;
        }

        @media(max-width: 991px) {
            #top .offer {
                margin-bottom: 10px;
            }
        }

        @media(max-width: 991px) {
            #top {
                font-size: 12px;
                text-align: center;
            }
        }

        #top a {
            color: #ffffff;
        }

        #top ul.menu {
            padding-top: 5px;
            margin: 0px;
            text-align: right;
            font-size: 12px;
            list-style: none;
        }

        @media(max-width: 991px) {
            #top ul.menu {
                text-align: center;
            }
        }

        #top ul.menu>li {
            display: inline-block;
        }

        #top ul.menu>li a {
            color: #eeeeee;
        }

        #top ul.menu>li+li:before {
            content: "|\00a0";
            color: #f7f7f7;
            padding: 0 5px;
        }


        .btn-primary {
            color: rgb(255, 255, 255);
            background: rgb(79, 191, 168);
            border-color: rgb(65, 179, 156);
        }

        #slider {
            margin-bottom: 40px;
        }

        /* advantages Styles */

        #advantages {
            text-align: center;
        }

        .box {
            background: #ffffff;
            margin: 0 0 30px;
            border: solid 1px #e6e6e6;
            box-sizing: border-box;
            padding: 20px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, .3);
        }

        #advantages .box .icon {
            position: absolute;
            font-size: 120px;
            width: 100%;
            text-align: center;
            top: -20px;
            left: 0px;
            height: 100%;
            float: left;
            color: #dadada;
            box-sizing: border-box;
            z-index: 1;
        }

        #advantages .box h3 {
            position: relative;
            margin: 0 0 20px;
            font-weight: 300;
            text-transform: uppercase;
            z-index: 2;
        }

        #advantages .box h3 a {
            color: #4fbfa8;
        }

        #advantages .box h3 a:hover {
            text-decoration: none;
        }

        #advantages .box p {
            position: relative;
            z-index: 2;
            color: #555555;
        }

        /* Latest Products Styles */

        #hot h2 {
            font-size: 36px;
            font-weight: 400;
            color: #4fbfa8;
            text-align: center;
            text-transform: uppercase;
        }

        #content {
            padding-left: 25px;
        }

        .single {
            width: 290px;
        }

        @media(max-width:768px) {
            .single {
                width: 60%;
                margin: 0 auto;
            }
        }

        #content .product {
            background: #ffffff;
            border: solid 1px #e6e6e6;
            margin-bottom: 30px;
            box-sizing: border-box;
        }

        #content .product .text {
            padding: 10px 10px 0px;
        }

        #content .product .text p.price {
            font-size: 18px;
            text-align: center;
            font-weight: 400;
        }

        #content .product .text .button {
            text-align: center;
            clear: both;
        }

        #content .product .text .button .btn {
            margin-bottom: 10px;
        }

        #content .product .text h3 {
            text-align: center;
            font-size: 20px;
        }

        #content .product .text h3 a {
            color: rgb(85, 85, 85);
        }

        /*  Breadcrumb Styles  */

        .breadcrumb {
            padding: 8px 15px;
            margin-bottom: 20px;
            background: #ffffff;
            border-radius: 5px;
            box-shadow: 0px 1px 5px rgba(0, 0, 0, .5);
        }

        .breadcrumb>li+li:before {
            content: ">\00a0";
            color: #cccccc;
        }

        @media(max-width:991px) {
            .breadcrumb {
                padding: 8px 0px;
                text-align: center;
            }
        }

        /*  Products Categories & Categories Styles */
        #content .panel.sidebar-menu {
            box-sizing: border-box;
            box-shadow: 0px 1px 5px rgba(0, 0, 0, .5);
        }

        #content .panel.sidebar-menu ul.nav.category-menu {
            margin-bottom: 20px;
        }

        #content .panel.sidebar-menu ul.nav.category-menu li a {
            text-transform: uppercase;
            font-weight: 600;
        }

        #content .panel.sidebar-menu h3 {
            padding: 5px 0px;
            margin: 0px;
        }

        /*  Shop Products Tyles  */

        @media(max-width: 768px) {
            .center-responsive {
                width: 70%;
                margin: 0px auto;
            }
        }

        @media(max-width: 550px) {
            .center-responsive {
                width: 95%;
                margin: 0px auto;
            }
        }

        /*  Details.php Styles */


        #content #productMain {
            margin-bottom: 30px;
        }

        #content #productMain .price {
            font-size: 30px;
            font-weight: 300;
            text-align: center;
            margin-top: 30px;
        }

        #content #mainImage {
            box-shadow: 0px 1px 5px rgba(0, 0, 0, .7);
        }

        #content #thumbs a {
            display: block;
            box-shadow: 0px 1px 5px rgba(0, 0, 0, .5);
            border: 2px solid transparent;
        }

        #content .headline {
            height: 305px;
        }

        /*  Cart.php Styles  */

        #content #cart .table tbody tr td img {
            width: 50px;
        }

        #content #cart .table tbody tr td input {
            width: 40px;
            text-align: right;
        }

        #content #cart .table tbody tr td {
            vertical-align: middle;
        }

        #content #cart .table tfoot {
            font-size: 18px;
        }

        .box .box-footer {
            background-color: #f7f7f7;
            margin: 30px -20px 20px;
            padding: 20px;
            border-top: 1px solid #eeeeee;
        }

        .box .box-footer:before,
        .box .box-footer:after {
            content: "";
            display: table;
        }

        .box .box-footer:after {
            clear: both;
        }

        .box .box-header {
            background-color: #f7f7f7;
            margin: -20px -20px 20px;
            padding: 20px;
            border-top: 1px solid #eeeeee;
        }

        .same-height-row {
            display: flex;
            flex-wrap: wrap;
        }

        .col-sm-4 {
            margin: auto;
        }

        #content #order-summary table {
            margin-top: 20px;
        }

        #content #order-summary table td {
            color: #999999;
        }

        #content #order-summary table tr.total td,
        #content #order-summary table tr.total th {
            font-size: 18px;
            color: #555555;
            font-weight: 700;
        }


        /*  Footer Styles  */

        #footer {
            background: #e0e0e0;
            padding: 20px 0;
        }

        #footer a {
            color: #999999;
            padding: 0;
            text-decoration: none;
        }

        #footer a:hover {
            color: #666666;
        }

        #footer ul {
            list-style: none;
            padding-left: 0px;
        }

        #footer .social {
            text-align: left;
        }

        #footer .social a {
            margin: 0px 10px 0px 0px;
            display: inline-block;
            color: #ffffff;
            width: 30px;
            height: 30px;
            border-radius: 15px;
            line-height: 30px;
            font-size: 15px;
            text-align: center;
            vertical-align: bottom;
            background: #555555;
            text-decoration: none;
        }

        #footer .social a:hover {
            color: #dedede;
            background: #777777;
        }

        /*  Copyright Styles  */

        #copyright {
            background: #333333;
            color: #cccccc;
            padding: 20px 0px;
            font-size: 12px;
        }

        #copyright p {
            margin: 0px;
        }


        @import url('https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  list-style: none;
  text-decoration: none;
  font-family: 'Josefin Sans', sans-serif;
}

body{
   background-color: #f3f5f9;
}

.wrapper{
  display: flex;
  position: relative;
}

.wrapper .sidebar{
  width: 200px;
  height: 100%;
  background: #4b4276;
  padding: 30px 0px;
  position: fixed;
}

.wrapper .sidebar h2{
  color: #fff;
  text-transform: uppercase;
  text-align: center;
  margin-bottom: 30px;
}

.wrapper .sidebar ul li{
  padding: 15px;
  border-bottom: 1px solid #bdb8d7;
  border-bottom: 1px solid rgba(0,0,0,0.05);
  border-top: 1px solid rgba(255,255,255,0.05);
}    

.wrapper .sidebar ul li a{
  color: #bdb8d7;
  display: block;
}

.wrapper .sidebar ul li a .fas{
  width: 25px;
}

.wrapper .sidebar ul li:hover{
  background-color: #594f8d;
}
    
.wrapper .sidebar ul li:hover a{
  color: #fff;
}
 
.wrapper .sidebar .social_media{
  position: absolute;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
  display: flex;
}

.wrapper .sidebar .social_media a{
  display: block;
  width: 40px;
  background: #594f8d;
  height: 40px;
  line-height: 45px;
  text-align: center;
  margin: 0 5px;
  color: #bdb8d7;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
}

.wrapper .main_content{
  width: 100%;
  margin-left: 200px;
}

.wrapper .main_content .header{
  padding: 20px;
  background: #fff;
  color: #717171;
  border-bottom: 1px solid #e0e4e8;
}

.wrapper .main_content .info{
  margin: 20px;
  color: #717171;
  line-height: 25px;
}

.wrapper .main_content .info div{
  margin-bottom: 20px;
}

@media (max-height: 500px){
  .social_media{
    display: none !important;
  }
}


    </style>
</head>

<body>

    <div class="container" class="main_content" id="slider">
        <!-- container Begin -->

        <div class="col-md-12">
            <!-- col-md-12 Begin -->

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="https://via.placeholder.com/640x480.png/008833?text=reiciendis" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://via.placeholder.com/640x480.png/008833?text=reiciendis" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://via.placeholder.com/640x480.png/008833?text=reiciendis" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div><!-- col-md-12 Finish -->

    </div><!-- container Finish -->

    <div id="advantages">
        <!-- #advantages Begin -->

        <div class="container">
            <!-- container Begin -->

            <div class="same-height-row">
                <!-- same-height-row Begin -->

                <div class="col-sm-4">
                    <!-- col-sm-4 Begin -->

                    <div class="box same-height">
                        <!-- box same-height Begin -->

                        <div class="icon">
                            <!-- icon Begin -->

                            <i class="fa fa-heart"></i>

                        </div><!-- icon Finish -->

                        <h3><a href="#">Best Offer</a></h3>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>

                    </div><!-- box same-height Finish -->

                </div><!-- col-sm-4 Finish -->

                <div class="col-sm-4">
                    <!-- col-sm-4 Begin -->

                    <div class="box same-height">
                        <!-- box same-height Begin -->

                        <div class="icon">
                            <!-- icon Begin -->

                            <i class="fa fa-tag"></i>

                        </div><!-- icon Finish -->

                        <h3><a href="#">Best Prices</a></h3>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

                    </div><!-- box same-height Finish -->

                </div><!-- col-sm-4 Finish -->

                <div class="col-sm-4">
                    <!-- col-sm-4 Begin -->

                    <div class="box same-height">
                        <!-- box same-height Begin -->

                        <div class="icon">
                            <!-- icon Begin -->

                            <i class="fa fa-thumbs-up"></i>

                        </div><!-- icon Finish -->

                        <h3><a href="#">100% Original</a></h3>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

                    </div><!-- box same-height Finish -->

                </div><!-- col-sm-4 Finish -->

            </div><!-- same-height-row Finish -->

        </div><!-- container Finish -->

    </div><!-- #advantages Finish -->

    <div id="hot">
        <!-- #hot Begin -->

        <div class="box">
            <!-- box Begin -->

            <div class="container">
                <!-- container Begin -->

                <div class="col-md-12">
                    <!-- col-md-12 Begin -->

                    <h2>
                        Our Latest Products
                    </h2>

                </div><!-- col-md-12 Finish -->

            </div><!-- container Finish -->

        </div><!-- box Finish -->

    </div><!-- #hot Finish -->

    <div id="content" class="container">
        <!-- container Begin -->

        <div class="row">
            <!-- row Begin -->
            @foreach ($Produits as $produit)       
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="{{$produit->photo_produit}}"></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a>{{$produit->nom_produit}} </a><br>
                        </h4>
                        <h5>{{$produit->prix}}</h5>
                        <a class="btn btn-warning" href="panier.php"><i class="fas fa-shopping-cart"></i>Ajouter au panier</a>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                    </div>
                </div>
            </div>
            @endforeach
        </div><!-- row Finish -->



    </div><!-- container Finish -->
</div>
    <script src="{{asset('js/jquery-331.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-337.min.js')}}"></script>


</body>

</html>
@endsection