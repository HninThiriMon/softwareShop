<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public function userHasStatus()
    {
        return $this->hasMany('App\model\UserHasStatus');
    }
}
