<?php

namespace App;



use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
   protected $fillable = [
       	'customer_id', 'address_id', 'order_date', 'delivery_date'
    ];

    public function customer()
    {
    	return $this->belongsTo('\App\Customer','customer_id');

    }

}