<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    public function oneTimeServiceSaleItem()
    {
        return $this->hasMany('App\model\OneTimeServiceSaleItem');
    }

    public function continuousServiceSaleItem()
    {
        return $this->hasMany('App\model\ContinuousServiceSaleItem');
    }

    public function productSaleItem()
    {
        return $this->hasMany('App\model\ProductSaleItem');
    }

    public function contract()
    {
        return $this->hasMany('App\model\Contract');
    }

    public function saleStatus()
    {
        return $this->belongsTo('App\model\SaleStatus');
    }
}
