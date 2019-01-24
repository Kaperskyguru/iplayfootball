<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['message_status_id'];

    public function status()
    {
        return $this->belongsTo('App\Status', "message_status_id", 'id');
    }

    public function type()
    {
        return $this->belongsTo('App\Status', "message_type", 'id');
    }

    public function sender()
    {
        return $this->belongsTo('App\User', "message_sender_id", 'id');
    }

    public function reciever()
    {
        return $this->belongsTo('App\User', "message_receiver_id", 'id');
    }
}
