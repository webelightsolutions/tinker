<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerAddresses extends Model
{
    protected $fillable = [

    	'customer_id' , 'full_name' , 'contact_no' , 'address'

    ];
}
