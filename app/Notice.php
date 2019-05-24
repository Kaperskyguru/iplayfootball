<?php

namespace Iplayfootball;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    protected $dates = ['notice_publishdate'];

    public function status()
    {
        return $this->belongsTo('Iplayfootball\Status', "notice_status_id", 'id');
    }

    public function visibleTo()
    {
        return $this->belongsTo('Iplayfootball\Status', "notice_visibility_id", 'id');
    }
}

