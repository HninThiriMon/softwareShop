<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class SaleStatus extends Model
{
    public function sale()
    {
        return $this->hasMany('App\model\Sale');
    }
}
