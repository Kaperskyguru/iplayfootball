<?php

namespace Iplayfootball;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $guard = 'team';

    public function user()
    {
        return $this->belongsTo('Iplayfootball\User');
    }

    public function status()
    {
        return $this->belongsTo('Iplayfootball\Status', 'status_id', 'id');
    }

    public function verify()
    {
        return $this->belongsTo('Iplayfootball\Verification', 'id', 'verification_user_id');
    }
}
