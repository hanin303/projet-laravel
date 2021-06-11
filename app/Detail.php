<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    // protected $fillable  = ['Quantite','commande_id','produit_id'];
       protected $guarded =[];

    public function produit()
    {
        return $this->belongsTo('App\Produit');
    }



    public function commande()
    {
        return $this->belongsTo('App\Commande');
    }


}
