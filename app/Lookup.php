<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lookup extends Model
{
   protected $fillable = [
       	'type_id', 'name'
    ];

    public function type()
    {
    	return $this->belongTo('\App\Type','type_id');

    }
}
