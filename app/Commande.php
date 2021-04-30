<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
  public function client()
  {
      return $this->belongsTo('App\Client');
  }


  public function details()
  {
      return $this->hasMany('App\Detail');
  }

