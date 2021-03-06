{{----------------------------------- standard navigation --------------------------- --}}
@extends('layouts.dashboard')
@section('content')

<div class="pcoded-main-container">
                <div class="pcoded-wrapper">
          
<fieldset>
   <legend> <i class ="fas fa-user-edit"></i> Edit Admin : <strong>{{$admin ->name}}</strong>  </legend>
   <form action ="{{ route('admins.update' , ['admin' =>$admin -> id] )}} "method="post"> 
    @method('PUT')
   @csrf
  
   <div class="row">
    <div class ="col"><div class ="form-group">
                  <label for="name"> Name </label>
                  <input type ="text" name="name" value ="{{ $admin -> name}}"  id="name" class="form-control"  @error ('name ') is-invalid @enderror placeholder="first Name" >
                  @error ('name')
                  <div class="  text-danger">{{ $message}}</div>
                  @enderror
              </div>
          </div>
        <div class ="col">
        <div class ="form-group">
            <label for="email">Email </label>
            <input type ="email" name="email" value ="{{ $admin -> email}}" id="email" class="form-control"  @error ('email') is-invalid @enderror placeholder="user@gmail.com" >
            @error ('email')
                  <div class=" text-danger">{{ $message}}</div>
                  @enderror
            </div>
        </div>
         </div>
            <div class ="form-group">
                <label for="password">Password </label>
                <input type ="password" name="password" value ="{{ $admin -> password}}" id="password" class="form-control"  @error ('password') is-invalid @enderror placeholder="password" >
                @error ('password')
                      <div class=" text-danger">{{ $message}}</div>
                      @enderror
                </div>
                   <div class ="form-group">
            <label for="adress">Adress </label>
            <input type ="adress" name="adress" value ="{{ $admin -> adress}}" id="adress" class="form-control"  @error ('adress') is-invalid @enderror placeholder="Adress" >
            @error ('adress')
                  <div class=" text-danger">{{ $message}}</div>
                  @enderror
            </div>
            <div class ="form-group">
                <label for="phone">Phone number </label>
                <input type ="phone" name="phone" value ="{{ $admin -> phone}}"   id="phone" class="form-control"  @error ('phone') is-invalid @enderror placeholder="+5489125548 " >
                @error ('phone')
                  <div class="  text-danger">{{ $message}}</div>
                  @enderror
                </div>

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
<script src="{{ asset('js/app.js') }}" defer></script>
@endsection