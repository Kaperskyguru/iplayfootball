<?php

namespace Iplayfootball;

use Illuminate\Database\Eloquent\Model;

class Scout extends Model
{
    protected $guard = 'scout';

    public function user()
    {
        return $this->belongsTo('Iplayfootball\User');
    }

    public function verify()
    {
        return $this->belongsTo('Iplayfootball\Verification', 'verification_user_id', 'id');
    }

    public function status()
    {
        return $this->belongsTo('Iplayfootball\Status', 'scout_status_id', 'id');
    }
}
