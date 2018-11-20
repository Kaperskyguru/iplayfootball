<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;
use Faker\Factory as faker;

class PlayersController extends Controller
{
    private $faker;

    public function __construct() {

    }

    public function index()
    {
        return View('profiles')->with('players', Player::all());
    }

    public function players()
    {
        return Player::all();
    }

    public function player(int $idea)
    {
        return Player::findOrFail($id);
    }

    public function store()
    {
        $this->faker = faker::create();
        $gender = $this->faker->randomElement($array = array('male', 'female', 'mixed'));
        $status = $this->faker->randomElement($array = array('Active', 'Pending', 'inactive'));
        $performance = $this->faker->randomKey($array = array('Okay', 'Impressive', 'Outstanding'));
        $position = $this->faker->randomElement($array = array('Winger','Striker','Mid-Fielder','Defender','Goal Keepeer'));

        $player = new Player;
        $player->player_firstname = $this->faker->firstName($gender);
        $player->player_lastname = $this->faker->lastName;
        $player->player_username = $this->faker->userName;
        $player->player_password = $this->faker->password;
        $player->player_email = $this->faker->unique()->safeEmail;
        $player->player_image_id = $this->faker->numberBetween(1,20);
        $player->player_height = $this->faker->numberBetween(50,100);
        $player->player_weight = $this->faker->numberBetween(30,400);
        $player->player_facebook_id = $this->faker->numberBetween(1,20);
        $player->player_dob = $this->faker->date($format = 'Y-m-d', $max = 'now');
        $player->player_address = $this->faker->address;
        $player->player_package_id = $this->faker->numberBetween(1,20);
        $player->player_gender = $gender;
        $player->player_status_id = $this->faker->numberBetween(30,400);
        $player->player_position = $position;
        $player->player_games_played = $performance;
        $player->player_minutes_played = $performance;
        $player->player_super_substitute = $performance;
        $player->player_associate_team = $this->faker->numberBetween(1,20);
        $player->player_associate_academic = $this->faker->numberBetween(1,20);
        $player->player_associate_scout = $this->faker->numberBetween(1,20);
        $player->player_biography = $this->faker->text;
        $player->player_team_spirit = $performance;
        $player->player_passing_accuracy = $performance;
        $player->player_ground_duel_winning = $performance;
        $player->player_recovery = $performance;
        $player->player_tackles_winning = $performance;
        $player->player_clearance = $performance;
        $player->player_blocking = $performance;
        $player->player_interceptions = $performance;
        $player->player_penalties_conceded = $performance;
        $player->player_foul_winnings = $performance;
        $player->player_goal_scoring = $performance;
        $player->player_penalty_goals = $performance;
        $player->player_successful_crosses = $performance;
        $player->player_assist_ability = $performance;
        $player->player_chances_creation = $performance;
        $player->player_penalties_winnings = $performance;
        $player->player_offsides = $performance;
        $player->save();
        return 'save';
    }
}
