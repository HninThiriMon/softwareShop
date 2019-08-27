<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class ContinuousService extends Model
{
    protected $fillable = [
        'name',
        'price_per_unit',
        'description',
        'basic_unit',
        'tax_percentage',
        'active_for_sale',
        'default_automatic_prolongation_period'
    ];

    public function continuousServiceSaleItem()
    {
        return $this->hasMany('App\model\ContinuousServiceSaleItem');
    }

}
