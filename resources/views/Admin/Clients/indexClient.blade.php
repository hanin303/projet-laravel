@extends('layouts.dashboard')
@section('content')

<div class="pcoded-main-container">
      <div class="pcoded-wrapper">
        <a href="{{route('clients.create')}}" class="btn btn-outline-primary float-right"><i class="fas fa-user-plus"></i> Ajouter Client</a>
        <br>
             <h1><i class ="fas fa-users"></i>  Liste Clients</h1>
             <br>
             <div>
             @foreach ($clients as $client)
             <div class="card border-info mb-3" style="max-width: 100%;">
                <div class="card-header bg-transparent border-info">
                  <div >
                    <img class="img-60 img-radius" src="{{ $client->photo}}" alt="User-Profile-Image">
                  </div>
                  <div style="padding-left: 88px;">
                    <h4>{{ $client->name}}</h4>
                 </div>                
                </div>
                <div class="card-body text-info" style="padding-left: 120px;">
                  <h5 class="card-title">{{ $client->email}}</h5>
                  <p class="card-text">{{ $client->phone}}</p>
                </div>
                <div class="card-footer bg-transparent border-info" style="padding-left: 550px;">
                    <a href="{{ route('clients.show',['client' => $client->id])}}"class="btn btn-primary"><i class ="fas fa-user-tag"></i></a>
                    <a href="{{route('clients.edit',['client'=>$client->id])}}" class="btn btn-warning"><i class="fas fa-user-edit"></i></a>
                    <a href="#" class="btn btn-danger" title="Delete user {{ $client->name  }}"
                      onclick="event.preventDefault(); document.querySelector('#delete-client-form').submit()"
                      ><i class="fas fa-user-slash"></i></a>
                  <form action="{{ route('clients.destroy', ['client' => $client->id]) }}" method="post" id="delete-client-form">@csrf @method('DELETE')</form>
            </div>
              </div> 
              
            @endforeach
            <div class="mx-auto"  style="width: 200px;">
                {{ $clients->links() }}
            </div>
        </div>
                </div>
              
            </div>
@endsection
