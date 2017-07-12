<?php

namespace App;

use App\BaseModel;

class Type extends BaseModel
{
    protected $fillable = [
       	'name', 'alias'
    ];

    public function lookups()
    {
    	return $this->hasMany('\App\Lookup');

    }
}
