<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','status_id', 'password', 'token', 'phone','role', 'state'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function academic()
    {
        return $this->hasOne('App\Academic');
    }

    public function player()
    {
        return $this->hasOne('App\Player', 'user_id', 'id');
    }

    public function status()
    {
        return $this->belongsTo('App\Status', 'status_id', 'id');
    }

    public function team()
    {
        return $this->hasOne('App\Team', 'user_id', 'id');
    }

    public static function getUserType(string $role)
    {
        switch ($role) {
            case '9':
            return 'admin';
                break;
            case '6':
                return 'team';
                break;
            case '8':
                return 'player';
                break;
            case '5':
                return 'academic';
                break;
            case '7':
                return 'scout';
                break;
            default:
                return 'admin';
                break;
        }
    }

    public function hasVerifiedEmail()
    {
        $this->status_id = 1;
        $this->save();
    }

}
