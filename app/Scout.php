<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scout extends Model
{
    protected $guard = 'scout';

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function status()
    {
        return $this->belongsTo('App\Status', 'scout_status_id', 'id');
    }
}
