<?php

namespace Iplayfootball;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['message_status_id'];

    public function status()
    {
        return $this->belongsTo('Iplayfootball\Status', "message_status_id", 'id');
    }

    public function type()
    {
        return $this->belongsTo('Iplayfootball\Status', "message_type", 'id');
    }

    public function sender()
    {
        return $this->belongsTo('Iplayfootball\User', "message_sender_id", 'id');
    }

    public function reciever()
    {
        return $this->belongsTo('Iplayfootball\User', "message_receiver_id", 'id');
    }
}
