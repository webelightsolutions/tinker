<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
     protected $fillable = [
        'name', 'email', 'contact_number','address'
    ];

    public function orders()
    {
    	return $this->hasMany('Order');
    }
}
