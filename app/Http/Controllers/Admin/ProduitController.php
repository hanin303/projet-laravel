<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('Admin.produits' , ['produits' => Produit::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('Admin.createProduit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'nom_produit' => 'required',
                'stock_produits' => 'required',
                'description_produits' => 'required',
                'prix' => 'required',
            ]);

        $produit =Produit::create($validatedData);

        return redirect()->route('produits.show', $produit);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produit = Produit::find($id); 
        return view ('Admin.showProduit' ,['produit' =>  $produit ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function edit(Produit $produit)
    {
        
        return view('Admin.editProduit', ['produit' => $produit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produit $produit)
    {
        $validatedData = $request->validate(
            [
                'nom_produit' => 'required',
                'stock_produits' => 'required',
                'description_produits' => 'required',
                'prix' => 'required',
                            ]);
        $produit->update($validatedData);

        return redirect()->route('produits.show', $produit)->with('updateProduct', "Product has been updated successfuly");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produit $produit)
    {
        $produit->delete();
        return redirect()->route('produits.index')->with('deleteProduct', 'Product has been deleted!');
    }
   
    }

