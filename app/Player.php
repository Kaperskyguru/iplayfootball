<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    //

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'player_password',
    ];

    protected $fillable = [
        "player_firstname",
        "player_lastname",
        "player_username",
        "player_password",
        "player_email",
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
        "player_offsides"
    ];
}
