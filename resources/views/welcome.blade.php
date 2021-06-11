

@extends('layouts.app')

@section('content')
<div> 
    @include('layouts.SidBar')
</div>
<div>
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
                        <form action="/commandes" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$produit->id}}">
                            <input type="hidden" name="nom_produit" value="{{$produit->nom_produit}}">
                            <input type="hidden" name="prix" value="{{$produit->prix}}">
                            <button type="submit" class="btn btn-warning"><i class="fas fa-shopping-cart"></i>Ajouter au panier</button>
                            </form>
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
</div>

    <script src="{{asset('js/jquery-331.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-337.min.js')}}"></script>

@endsection