<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class UserHasStatus extends Model
{
    public function status()
    {
        return $this->belongsTo('App\model\Status');
    }

    public function user()
    {
        return $this->belongsTo('App\model\User');
    }

}
