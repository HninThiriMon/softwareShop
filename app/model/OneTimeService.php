<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class OneTimeService extends Model
{
    protected $fillable = [
        'name',
        'price',
        'tax_percentage',
        'active_for_sale',
    ];

    public function oneTimeServiceSaleItem()
    {
        return $this->hasMany('App\model\OneTimeServiceSaleItem');
    }

}
