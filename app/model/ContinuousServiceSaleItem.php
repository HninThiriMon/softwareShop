<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class ContinuousServiceSaleItem extends Model
{
    public function continuousService()
    {
        return $this->belongsTo('App\model\ContinuousService');
    }

    public function sale()
    {
        return $this->belongsTo('App\model\Sale');
    }

    public function userHasRole()
    {
        return $this->belongsTo('App\model\UserHasRole');
    }
}
