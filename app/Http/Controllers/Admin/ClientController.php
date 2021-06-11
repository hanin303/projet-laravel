<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Commande;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Mail\NewCustomer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       return view ('Admin.Clients.indexClient',['clients' => User::paginate(2)]);
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

        $client = new User;
        $client->name= $request->name;
        $client->email = $request->email;
        $client->password= $request->password;
        $client->adresse = $request->adresse;
        $client->phone= $request->phone;
        $client->admin = 0;
        $client->save();

        if(Auth::user()){     
            $user = Auth::user()->id ;
               //dd($id);
           }

        $commande = new Commande;
        $commande->Date_commande = new \DateTime('now');
        $commande->user_id = $user;
        $commande->save();
        $this->Cmd = $commande->id;

      //  Mail::to($client->email)->send(new NewCustomer($client));
        return redirect()->route('clients.show',$client);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $client
     * @return \Illuminate\Http\Response
     */
    public function show(User $client)
    {
        return view('Admin.Clients.showClient',['client' => $client]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(User $client)
    {
        return view('Admin.Clients.editClient',['client'=>$client]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $client)
    {
        $validatationData = $request->validate($this->ValidationData());
    
        $client->name= $request->name;
        $client->email = $request->email;
        $client->password= $request->password;
        $client->adresse = $request->adresse;
        $client->phone= $request->phone;
        $client->save();
        return redirect()->route('clients.show',$client);
      }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $client)
    {
        $client->delete();
        return redirect()->route('clients.index');
    }


    private function ValidationData(){
        return [
            'name' =>'required|min:2',
            'email' =>'required|email',
            'adresse' =>'required|min:2',
            'password' =>'required|min:8',
            'phone' =>'required|size:8',
        ];
    }
}
