<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerAddress extends Model
{
    protected $fillable = [

    	'customer_id' , 'full_name' , 'contact_no' , 'address'

    ];

    public function customer(){
    	
    	return $this->belongsTo('Customer','customer_id');
    }
}
