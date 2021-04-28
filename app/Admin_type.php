<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin_type extends Model
{
    public function adminusers()
    {
        return $this->hasMany('App\Adminuser');
    }
}
