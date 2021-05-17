
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script src="https://kit.fontawesome.com/3a7c0ab2e8.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
  <style>
    table {
      border-collapse: collapse;
      width: 70%;
    }
    
    th, td {
      text-align: left;
      padding: 8px;
    }
    
    /* tr:nth-child(even) {background-color: #f2f2f2;} */
    </style>
</head>
<body>
{{----------------------------------- standard navigation --------------------------- --}}
@extends('layouts.dashboard')
@section('content')

<div class="pcoded-main-container">
                <div class="pcoded-wrapper">
            
             <h3>Liste Produit</h3>
             <div>
             <table>
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col"><i class="fab fa-product-hunt"></i>Nom Produit</th>
                    <th scope="col"><i class="fas fa-cubes"></i>Stock Produit</th>
                    <!-- <th scope="col">Description Produit</th> -->
                    <th scope="col"><i class="fas fa-hand-holding-usd"></i>Prix</th>
                    <th scope="col"><i class="fas fa-cogs"></i> Opérations</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($produits as $Key => $produit)
                        
                  <tr>
                    <th scope="row">{{ $Key }}</th>
                     <td>{{$produit ->nom_produit}}</td>
                   <td>{{$produit ->stock_produits}}</td>
                    <!-- <td>{{$produit ->description_produits}}</td> -->
                    <td>{{$produit ->prix}}</td>
                    <td> 
                    <a href="#" class="btn btn-primary" style="background-color: #0082ca;"  ><i class="fas fa-user-tag"></i></a>
                    <a href="#"class="btn btn-warning" style="background-color: #ffac44;"><i class="fas fa-user-edit"></i> </a>
                    <a href="#" class="btn btn-danger" style="background-color: #c61118;"><i class="fas fa-trash-alt"></i></a>
                   </td>
                    
                    
                    </tr>
                  @endforeach
                </tbody>
              </table>
             </div>

                    
                </div>
                <div class="fixed-button">
                    <a href="https://codedthemes.com/item/guru-able-admin-template/" target="_blank" class="btn btn-md btn-primary">
                      <i class="fa fa-shopping-cart" aria-hidden="true"></i> Upgrade To Pro
                    </a>
                </div>
            </div>
        </div>

<!-- Required Jquery -->
<script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="assets/js/modernizr/modernizr.js"></script>
<!-- am chart -->
<script src="assets/pages/widget/amchart/amcharts.min.js"></script>
<script src="assets/pages/widget/amchart/serial.min.js"></script>
<!-- Todo js -->
<script type="text/javascript " src="assets/pages/todo/todo.js "></script>
<!-- Custom js -->
<script type="text/javascript" src="assets/pages/dashboard/custom-dashboard.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>
<script type="text/javascript " src="assets/js/SmoothScroll.js"></script>
<script src="assets/js/pcoded.min.js"></script>
<script src="assets/js/demo-12.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script>
var $window = $(window);
var nav = $('.fixed-button');
    $window.scroll(function(){
        if ($window.scrollTop() >= 200) {
         nav.addClass('active');
     }
     else {
         nav.removeClass('active');
     }
 });
</script>
@endsection
  
</body>
</html>
