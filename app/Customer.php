<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
     protected $fillable = [

        'name', 'email', 'contact_number','address'
    ];

<<<<<<< HEAD
    public function customerAddresses(){
    	
    	return $this->hasMany('\App\CustomerAddress');
    }


=======
    public function orders()
    {
    	return $this->hasMany('Order');
    }
>>>>>>> 213d858e4228a1937b7a9ed7670b2da803e1bea8
}
