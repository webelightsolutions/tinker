<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerAddress extends Model
{
    protected $fillable = [

    	'customer_id' , 'full_name' , 'contact_no' , 'address'

    ];
<<<<<<< HEAD:app/CustomerAddress.php

    public function customer(){
    	
    	return $this->belongsTo('Customer','customer_id');
    }
=======
    
>>>>>>> 213d858e4228a1937b7a9ed7670b2da803e1bea8:app/CustomerAddresses.php
}

