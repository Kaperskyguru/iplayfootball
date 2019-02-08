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

    public function verify()
    {
        return $this->belongsTo('App\Verification', 'verification_user_id', 'id');
    }

    public function status()
    {
        return $this->belongsTo('App\Status', 'scout_status_id', 'id');
    }
}
