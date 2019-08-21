<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class UserHasRole extends Model
{
    public function oneTimeServiceSaleItem()
    {
        return $this->hasMany('App\model\OneTimeServiceSaleItem');
    }

    public function continuousServiceSaleItem()
    {
        return $this->hasMany('App\model\ContinuousServiceSaleItem');
    }

    public function user()
    {
        return $this->belongsTo('App\model\User');
    }

    public function role()
    {
        return $this->belongsTo('App\model\Role');
    }
}
