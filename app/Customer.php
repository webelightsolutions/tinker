<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
     protected $fillable = [

        'name', 'email', 'contact_number','address'
    ];

    public function customerAddresses(){
    	
    	return $this->hasMany('\App\CustomerAddress');
    }


}
