<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class OneTimeService extends Model
{
    public function oneTimeServiceSaleItem()
    {
        return $this->hasMany('App\model\OneTimeServiceSaleItem');
    }

}
