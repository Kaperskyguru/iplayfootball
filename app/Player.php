<?php

namespace Iplayfootball;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $guard = 'player';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'player_password',
    ];

    protected $fillable = [
        "player_image_id",
        "player_height",
        "player_weight",
        "player_facebook_id",
        "player_dob",
        'player_address',
        "player_package_id",
        "player_gender",
        "player_status_id",
        "player_position",
        "player_games_played",
        "player_minutes_played",
        "player_super_substitute",
        "player_associate_team",
        "player_associate_academic",
        "player_associate_scout",
        "player_biography",
        "player_team_spirit",
        "player_passing_accuracy",
        "player_ground_duel_winning",
        "player_recovery",
        "player_tackles_winning",
        "player_clearance",
        "player_blocking",
        "player_interceptions",
        "player_penalties_conceded",
        "player_foul_winnings",
        "player_goal_scoring",
        "player_penalty_goals",
        "player_successful_crosses",
        "player_assist_ability",
        "player_chances_creation",
        "player_penalties_winnings",
        "player_offsides",
    ];

    public function status()
    {
        return $this->belongsTo('Iplayfootball\Status', 'player_status_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('Iplayfootball\User', 'user_id', 'id');
    }

    public function package()
    {
        return $this->belongsTo('Iplayfootball\Status', 'player_package_id', 'id');
    }

    public function verify()
    {
        return $this->belongsTo('Iplayfootball\Verification', 'user_id', 'verification_user_id');
    }

    public function team()
    {
        return $this->hasOne('Iplayfootball\Team', 'id', 'player_associate_team');
    }
}
