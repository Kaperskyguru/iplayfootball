<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Verification extends Model
{
    //
    public function status()
    {
        return $this->hasOne('App\Status', 'id', 'verification_status_id');
    }

    public function user()
    {
        return $this->hasOne('App\User', 'id', 'verification_user_id');
    }
}
