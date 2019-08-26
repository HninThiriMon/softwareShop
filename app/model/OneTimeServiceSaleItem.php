<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class OneTimeServiceSaleItem extends Model
{
    public function oneTimeService()
    {
        return $this->belongsTo('App\model\OneTimeService');
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
