<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = [
       	'name', 'alias'
    ];

    public function lookups()
    {
    	return $this->hasMany('\App\Lookup');

    }
}
