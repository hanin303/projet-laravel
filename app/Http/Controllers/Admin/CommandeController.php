<?php


namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;
use App\Commande;
use App\User;
use App\Produit;
use DateTime;

class CommandeController extends Controller{
   
   

    private $user= null;

    private $commande;

    private $Cmd;
    
    private $prod = 0;

    public function AddCommande( Request $request ){
       
        if(Auth::user()){     
            $this->user = Auth::user()->id ;
               //dd($id);
           }
    

        $this->prod= $request -> input('id');

        $Cmd = \App\User::find($this->user)->commandes->each(function($commande)
              { 
                  if($commande->prix_Commande == 1 ){
                            $commande->delete();
                            
                            $commande = new Commande;
                            $commande->Date_commande = new \DateTime('now');
                            $commande->user_id = $this->user;
                            $commande->save();
                            $this->Cmd = $commande->id;
                            // dd($this->Cmd);
                            

                  }else {
                            $this->Cmd = $commande->id;
                            // dd($this->Cmd);
                  }
                   
             });
                     $produit = \App\Produit::find($this->prod);
                     $produit->details()->create([
                         'Quantite'=> 2,
                         'commande_id' =>$this->Cmd,
                         'produit_id'=> $produit->id,
                     ]);


                $details = DB::table('details')
                            ->join('commandes', 'commandes.id', '=', 'details.commande_id')
                            ->join('produits', 'produits.id', '=', 'details.produit_id')
                            ->where('details.commande_id', '=', $this->Cmd)
                            ->distinct()->get();
                   
                            

               return view('Panier.Panier',['Details'=>$details]);    
  
            }

            
}
