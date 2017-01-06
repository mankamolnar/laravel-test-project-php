<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    public function getAttributes() {
        return $this->attributes;
    }

    public function orders() {
        return $this->hasMany('App\Order');
    }
}
