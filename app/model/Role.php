<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function userHasRole()
    {
        return $this->hasMany('App\model\UserHasRole');
    }
}
