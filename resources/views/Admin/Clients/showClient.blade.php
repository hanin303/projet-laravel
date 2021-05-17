@extends('layouts.dashboard')
@section('content')

<div class="pcoded-main-container">
      <div class="pcoded-wrapper">
        <br>
          <h1><i class ="fas fa-id-card"></i>  Détails du client :  <strong>{{ $client->nom_client.' '.$client->prenom_client}}</strong></h1>
        <br>     
        
         <div class="card border-info mb-3" style="max-width: 40rem;left: 73px;">
            <div class="container">
            <div class="card-footer bg-transparent border-info" style="padding-left: 430px;margin-top: 17px;padding-bottom: 0px;">
                <a href="{{route('clients.edit',['client'=>$client->id])}}" class="btn btn-info"><i class="fas fa-user-edit"></i></a>
       
                <a href="#" class="btn btn-danger" title="Delete user {{ $client->nom_client.' '.$client->prenom_client  }}"
                    onclick="event.preventDefault(); document.querySelector('#delete-client-form').submit()"
                    ><i class="fas fa-user-slash"></i></a>
                <form action="{{ route('clients.destroy', ['client' => $client->id]) }}" method="post" id="delete-client-form">@csrf @method('DELETE')</form>
    
          </div>
            <div class="card-body">
                    <h5 class="card-title">
                        <div class="row">
                            <div class="col-md-6">
                                <label><i class ="fas fa-user-tie"></i>  Nom</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{ $client->prenom_client.' '.$client->nom_client}}</p>
                            </div>
                        </div>
                    </h5>
                    <p class="card-text">
                    <div class="row">
                        <div class="col-md-6">
                            <label><i class="fas fa-address-card"></i> Adresse</label>
                        </div>
                        <div class="col-md-6">
                            <p>{{ $client->	adresse_client}}</p>
                        </div>
                    </div>
                
                    <div class="row">
                        <div class="col-md-6">
                            <label><i class="fas fa-at"></i> Email</label>
                        </div>
                        <div class="col-md-6">
                            <p>{{ $client->	email_client}}</p>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <label><i class="fas fa-phone"></i> Téléphone</label>
                        </div>
                        <div class="col-md-6">
                            <p>{{ $client->telephone_client}}</p>
                        </div>
                    </div>
                </p>
            </div>
         
          </div>     
                       
        </div>         
                                
                
       </div>
    </div>
@endsection
