<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class ContinuousService extends Model
{
    public function continuousServiceSaleItem()
    {
        return $this->hasMany('App\model\ContinuousServiceSaleItem');
    }
}
