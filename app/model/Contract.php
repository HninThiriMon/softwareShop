<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    public function client()
    {
        return $this->belongsTo('App\model\Client');
    }

    public function sale()
    {
        return $this->belongsTo('App\model\Sale');
    }
}
