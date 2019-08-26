<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function contract()
    {
        return $this->hasMany('App\model\Contract');
    }
}
