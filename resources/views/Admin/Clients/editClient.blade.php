@extends('layouts.dashboard')
@section('content')

<div class="pcoded-main-container">
      <div class="pcoded-wrapper">
<div>
    <br>
      <legend style="margin-left: 320px;"> <i class ="fas fa-user-plus"></i> Modifier Client  </legend>    
    <br>
    <div class="card border-info mb-3" style="max-width: 40rem;left: 114px;">
      <div class="card-body text-info">
        <h5 class="card-title">
          <fieldset style="background-color: white">
            <div class="container">
              <form action = "{{ route('clients.update', ['client' => $client->id]) }}" method="post"> 
                  @method('PUT')
                  @include('Admin.Clients.form')
              </form>
            </div>
          </fieldset>
        </h5>
      </div>
    </div>
  

</div>
      </div>
</div>
@endsection