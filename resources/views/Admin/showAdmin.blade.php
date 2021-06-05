
{{----------------------------------- standard navigation --------------------------- --}}
@extends('layouts.dashboard')
@section('content')

<div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <center>
             <h2><i class ="fas fa-id-card"></i>   Admin Details About : <strong>{{$admin ->name}}</strong></h2>
         <br>
             <div class="card" style="width: 40rem;">
                <ul class="list-group list-group-flush">
                    <center>
                        <h3>Details</h3>
                    </center>
                  <li class="list-group-item"><i class ="fas fa-user-tie"></i> Name : <strong><br>{{$admin ->name}}</li>
                  <li class="list-group-item"><i class ="fas fa-envelope-open-text"></i> Email Adress :<strong><br>{{$admin ->email}}</li>
                  <li class="list-group-item"><i class ="fas fa-mobile-alt"></i> phone number :<strong><br> {{$admin ->phone}}</li>
                </ul>
              </div>
              <a href="/admins" class="btn btn-success"><i class ="fas fa-hand-point-left"></i> back to </a>
             </center>



                    
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
