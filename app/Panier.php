<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Panier extends Model
{
    public function produits(){
        return $this->hasMany('App\Produit');
    }
    
    public function cammande(){
        return $this->belongsTo('App/Cammnade');
    }
}
