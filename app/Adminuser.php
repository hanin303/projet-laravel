<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adminuser extends Model
{
    public function Admin_type()
    {
        return $this->belongsTo('App\Admin_type');
    }
}
