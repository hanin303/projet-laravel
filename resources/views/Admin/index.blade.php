<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <style>
    table {
      border-collapse: collapse;
      width: 75%;
    }
    
    th, td {
      text-align: left;
      padding: 8px;
    }
    tr:hover {background-color:#81d6e6e3;}
    tr:nth-child(even) {background-color: #f2f2f2;}
    </style>
</head>
<body>

{{----------------------------------- standard navigation --------------------------- --}}
@extends('layouts.dashboard')
@section('content')

@if (session('deleteAdmin'))
  <div class="alert alert-dismissible alert-success fade show" role="alert" width="50px">
  {{ session('deleteAdmin')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="close">
    <span aria-hidden="true">&times;<span>
  </button>
  </div>
@endif



<div class="pcoded-main-container">
  
                <div class="pcoded-wrapper">
            <a href="{{route('admins.create')}}" class="btn btn-outline-primary btn-lg float-right"><i class ="fas fa-user-plus"></i> Add new Admin </a>
            <br>
             <h3><i class ="fas fa-users-cog"></i>  Admins List</h3>
             <br>
             <div>
             <table>
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col"><i class ="fas fa-user"></i>   Name</th>
                    <th scope="col"><i class ="fas fa-envelope"></i>   Email</th>
                    <th scope="col"><i class ="fas fa-phone"></i>   phone</th>
                    <th scope="col"><i class ="fas fa-cogs"></i>    operations</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($admins as $Key => $admin)
                        
                  <tr>
                    <th scope="row">{{ $Key }}</th>
                    <td>{{$admin->name}}</td>
                    <td>{{$admin->email}}</td>
                    <td>{{$admin->phone}}</td>
                    <td>
                      <a href="{{route('admins.show' , ['admin' =>$admin -> id])}}" class="btn btn-primary"><i class ="fas fa-user-tag"></i> Show</a>
                      <a href="{{route('admins.edit' , ['admin' =>$admin -> id])}}" class="btn btn-warning" title= "Edit user {{$admin ->name}}"><i class ="fas fa-user-edit"></i>Edit</a>
                     
                      <a href="#" class="btn btn-danger" title= "delete user {{$admin ->name}}" 
                        onclick ="event.preventDefault(); 
                        document.querySelector('#delete-admin-form').submit()">
                        <i class ="fas fa-user-slash" ></i></a> 
                      <form action ="{{route('admins.destroy' , ['admin' =>$admin -> id])}} "method="post" id="delete-admin-form">  @csrf @method('DELETE')
                      </form>
                      
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