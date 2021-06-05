<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
  public function users()
  {
      return $this->belongsTo('App\User');
  }


  public function details()
  {
      return $this->hasMany('App\Detail');
  }
}
