<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $guarded = [];
    public function details()
    {
        return $this->hasMany('App\Detail');
    }

}
