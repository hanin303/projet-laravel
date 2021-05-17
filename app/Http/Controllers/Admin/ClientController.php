<?php

namespace App\Http\Controllers\Admin;

use App\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view ('Admin.Clients.indexClient',['clients' => Client::paginate(2)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Clients.createClient') ;   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatationData = $request->validate($this->ValidationData());

        $client = new Client;
        $client->nom_client = $request->nom;
        $client->prenom_client = $request->prenom;
        $client->telephone_client= $request->telf;
        $client->email_client = $request->mail;
        $client->adresse_client = $request->adresse;
        $client->save();

      //$client = Client::create($validatationData);
        return redirect()->route('clients.show',$client);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        return view('Admin.Clients.showClient',['client' => $client]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('Admin.Clients.editClient',['client'=>$client]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        $validatationData = $request->validate($this->ValidationData());

        $client->nom_client = $request->nom;
        $client->prenom_client = $request->prenom;
        $client->telephone_client= $request->telf;
        $client->email_client = $request->mail;
        $client->adresse_client = $request->adresse;
        $client->save();
        return redirect()->route('clients.show',$client);
      }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('clients.index');
    }


    private function ValidationData(){
        return [
            'nom' =>'required|min:2',
            'prenom' =>'required|min:2',
            'telf' =>'required|size:11',
            'mail' =>'required|email',
            'adresse' =>'required|min:2',
        ];
    }
}
