<?php

namespace Iplayfootball;

use Illuminate\Database\Eloquent\Model;

class Academic extends Model
{
    protected $guard = 'academic';

    public function getAcademicName()
    {
        return User::where('id', $this->user_id)->first()->name;
    }

    public function user()
    {
        return $this->belongsTo('Iplayfootball\User');
    }

    public function status()
    {
        return $this->belongsTo('Iplayfootball\Status', 'academic_status_id', 'id');
    }

    public function verify()
    {
        return $this->belongsTo('Iplayfootball\Verification', 'id', 'verification_user_id');
    }

}
