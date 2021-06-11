<?php

namespace App\Http\Controllers\Admin;

use App\Detail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use DB;

use Illuminate\Http\Request;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $Cmd;

    private $user= null;

    public function index()
    {
        if(Auth::user()){     
            $this->user = Auth::user()->id ;
               //dd($id);
           }
      $Cmd = \App\User::find($this->user)->commandes->each(function($commande)
              { 
                    $this->Cmd = $commande->id;
             });

    $details = DB::table('details')
                    ->join('commandes', 'commandes.id', '=', 'details.commande_id')
                    ->join('produits', 'produits.id', '=', 'details.produit_id')
                    ->where('details.commande_id', '=', $this->Cmd)
                    ->distinct()->get();
            

        return view ('Panier.Panier',['Details' => $details]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function show(Detail $detail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function edit(Detail $detail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Detail $detail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Detail $detail)
    {
        $deletedRows = Detail::where('id',67 )->delete();
        // $detail->delete();
        return redirect()->route('details.index'); 
       }
}
