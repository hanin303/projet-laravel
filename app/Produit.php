<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    public function panier(){
        return $this->belongsTo('App\Panier');
    }
}
