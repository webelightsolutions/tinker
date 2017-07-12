<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    protected $hidden = ['creator_id', 'updater_id', 'created_at', 'updated_at', 'deleted_at'];
}
