<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    protected $dates = ['notice_publishdate'];

    public function status()
    {
        return $this->belongsTo('App\Status', "notice_status_id", 'id');
    }

    public function visibleTo()
    {
        return $this->belongsTo('App\Status', "notice_visibility_id", 'id');
    }
}

