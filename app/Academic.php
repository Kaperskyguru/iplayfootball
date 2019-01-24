<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Academic extends Model
{
    protected $guard = 'academeic';

    public function getAcademicName()
    {
        return User::where('id', $this->user_id)->first()->name;
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function status()
    {
        return $this->belongsTo('App\Status', 'academic_status_id', 'id');
    }

    public function verify()
    {
        return $this->belongsTo('App\Verification', 'id', 'verification_user_id');
    }

}
