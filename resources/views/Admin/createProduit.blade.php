{{----------------------------------- standard navigation --------------------------- --}}
@extends('layouts.dashboard')
@section('content')

<div class="pcoded-main-container">
                <div class="pcoded-wrapper">
          
<fieldset>
   <legend> <i class ="fas fa-user-plus"></i> Add new product  </legend>
   <form action ="{{route('produits.store')}}" method="post"> 
   @csrf
  
   <div class ="form-group">
    <label for="nom_produit">nom produitsssssssssssssssssss</label>
    <input type ="text" name="nom_produit" value ="{{old('nom_produit')}}"   id="nom_produit"  class="form-control @error('nom_produit') is-invalid @enderror" placeholder="nom produit " >
    @error ('nom_produit')<div class="text-danger">{{ $message}}</div>@enderror
    </div>
         <div class="row">
              <div class ="col"><div class ="form-group">
                  <label for="stock_produits">Stock </label>
                  <input type ="text" name="stock_produits"  value ="{{old('stock_produits')}}" id="stock_produits"  class="form-control @error('stock_produits') is-invalid @enderror" placeholder="Stock" >
                  @error ('stock_produits')<div class="text-danger">{{ $message}}</div>@enderror
                  
                 
              </div>
             </div>
             <div class ="col"> <div class ="form-group">
                  <label for="prix">prix</label>
                  <input type ="text" name="prix" value ="{{old('prix')}}"  id="prix" class="form-control @error('prix') is-invalid @enderror" placeholder="prix" >
                  @error ('prix')<div class="text-danger">{{ $message}}</div>@enderror
                  
                 
           </div>
             </div>
          </div>

                <div class="row">
                   
                   
                   <div class ="col"> <div class ="form-group">
                        <label for="description_produits">description produits</label>
                        <input type ="text" name="description_produits" value ="{{old('description_produits')}}" id="description_produits" class="form-control @error('description_produits') is-invalid @enderror"  placeholder="description produits" >
                        @error ('description_produits')<div class="text-danger">{{ $message}}</div>@enderror
                        
                       
                 </div>
                   </div>
                </div> 



                <!-- <div class="form-group">
                    <label for="exampleFormControlSelect1">Type id</label>
                    <select class="form-control" id="type_id">
                      <option value='1'>Full acceess product</option>
                      <option value='2'>limited access product</option>
                      <option value='3'>full control product</option>    
                    </select>
                  </div> -->




                <div class="row">
                    <div class ="col"><button type="submit" class="btn btn-block btn-outline-primary"><i class ="fas fa-save"></i>Save</button></div>
                    <div class ="col"><button type="reset" class="btn btn-block btn-outline-secondary"><i class ="fas fa-window-close"></i>Cancel</button></div>
                </div>
        

</form>

</fieldset>



                    
            </div>
            <div class="fixed-button">
                <a href="https://codedthemes.com/item/guru-able-admin-template/" target="_blank" class="btn btn-md btn-primary">
                  <i class="fa fa-shopping-cart" aria-hidden="true"></i> Upgrade To Pro
                </a>
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
