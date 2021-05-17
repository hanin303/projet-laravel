
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <body>
{{----------------------------------- standard navigation --------------------------- --}}
@extends('layouts.dashboard')
@section('content')

<div class="pcoded-main-container">
                <div class="pcoded-wrapper">
          
<fieldset>
   <legend> <i class ="fas fa-user-plus"></i> Add new Admin  </legend>
   <form action ="{{ route('admins.store')}}"method="post"> 
    {{-- @method('GET') --}}
   @csrf
  
   <div class ="form-group">
    <label for="user_name ">User Name </label>
    <input type ="user_name" name="user_name" value ="{{old('user_name')}}"   id="user_name" class="form-control"  @error ('user_name ') is-invalid @enderror placeholder="user name  " >
    @error ('user_name')
      <div class=" text-danger">{{ $message}}</div>
      @enderror
    </div>
         <div class="row">
              <div class ="col"><div class ="form-group">
                  <label for="firs_name">First Name </label>
                  <input type ="text" name="first_name" value ="{{old('first_name')}}"  id="first_name" class="form-control"  @error ('first_Name ') is-invalid @enderror placeholder="first Name" >
                  @error ('first_name ')
                  <div class="  text-danger">{{ $message}}</div>
                  @enderror
              </div>
             </div>
             <div class ="col"> <div class ="form-group">
                  <label for="last_name">Last Name</label>
                  <input type ="text" name="last_name" value ="{{old('last_name')}}" id="last_name" class="form-control"  @error ('last_Name ') is-invalid @enderror placeholder="last  Name" >
                  @error ('last_name ')
                  <div class="  text-danger">{{ $message}}</div>
                  @enderror
           </div>
             </div>
          </div>

        <div class ="form-group">
            <label for="email_admin">Email </label>
            <input type ="email" name="email_admin" value ="{{old('email_admin')}}" id="email_admin" class="form-control"  @error ('email_Name ') is-invalid @enderror placeholder="user@gmail.com" >
            @error ('email_admin ')
                  <div class=" text-danger">{{ $message}}</div>
                  @enderror
            </div>
            <div class ="form-group">
                <label for="phone_admin ">Phone number </label>
                <input type ="phone" name="phone_admin" value ="{{old('phone_admin')}}"   id="phone_admin" class="form-control"  @error ('phone_Name ') is-invalid @enderror placeholder="+5489125548 " >
                @error ('phone_admin')
                  <div class=" text-danger">{{ $message}}</div>
                  @enderror
                </div>

                {{-- <div class="row">
                    <div class ="col"><div class ="form-group">
                        <label for="photo"> Photo </label>
                        <input type ="text" name="photo" value ="{{old('photo')}}"  id="photo" class="form-control"  @error ('photo ') is-invalid @enderror placeholder="photo" >
                        @error ('photo')
                        <div class="  text-danger">{{ $message}}</div>
                        @enderror
                    </div>
                   </div> --}}
                   
                   <div class ="col"> <div class ="form-group">
                        <label for="password">Password</label>
                        <input type ="password" name="password" value ="{{old('password')}}" id="password" class="form-control"  @error ('password ') is-invalid @enderror placeholder="password" >
                        @error ('password ')
                        <div class="  text-danger">{{ $message}}</div>
                        @enderror
                 </div>
                   </div>
                </div>



                {{-- <div class="form-group">
                    <label for="exampleFormControlSelect1">Type id</label>
                    <select class="form-control" id="type_id">
                      <option value='1'>Full acceess admin</option>
                      <option value='2'>limited access admin</option>
                      <option value='3'>full control admin</option>    
                    </select>
                  </div> --}}




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
</body>
</html>
