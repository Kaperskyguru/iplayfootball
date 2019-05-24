<?php

namespace Iplayfootball;

use Illuminate\Database\Eloquent\Model;

class Verification extends Model
{
    //
    public function status()
    {
        return $this->hasOne('Iplayfootball\Status', 'id', 'verification_status_id');
    }

    public function user()
    {
        return $this->hasOne('Iplayfootball\User', 'id', 'verification_user_id');
    }
}
