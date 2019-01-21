<?php
use Faker\Generator as Faker;

$factory->define(App\Player::class, function (Faker $faker) {
    $gender = $faker->randomElement($array = array('male', 'female'));
    $status = $faker->randomElement($array = array('Active', 'Pending', 'inactive'));
    $performance = $faker->randomKey($array = array('Okay', 'Impressive', 'Outstanding'));
    $position = $faker->randomElement($array = array('Winger','Striker','Mid-Fielder','Defender','Goal Keepeer'));
    return [
        'player_name' => $faker->name($gender),
        'player_phone' => $faker->e164PhoneNumber,
        'player_state' => $faker->state,
        'player_email' => $faker->unique()->safeEmail,
        'player_image_id' => $faker->numberBetween(1,20),
        'player_height' => $faker->numberBetween(50,100),
        'player_weight' => $faker->numberBetween(30,400),
        'player_facebook_id' => $faker->numberBetween(1,20),
        'player_dob' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'player_address' => $faker->address,
        'player_package_id' => $faker->numberBetween(1,3),
        'player_gender' => $gender,
        'player_status_id' => $faker->numberBetween(1,10),
        'player_position' => $position,
        'player_games_played' => $performance,
        'player_minutes_played' => $performance,
        'player_super_substitute' => $performance,
        'player_associate_team' => $faker->numberBetween(1,20),
        'player_associate_academic' => $faker->numberBetween(1,20),
        'player_associate_scout' => $faker->numberBetween(1,20),
        'player_biography' => $faker->text,
        'player_team_spirit' => $performance,
        'player_passing_accuracy' => $performance,
        'player_ground_duel_winning' => $performance,
        'player_recovery' => $performance,
        'player_tackles_winning' => $performance,
        'player_clearance' => $performance,
        'player_blocking' => $performance,
        'player_interceptions' => $performance,
        'player_penalties_conceded' => $performance,
        'player_foul_winnings' => $performance,
        'player_goal_scoring' => $performance,
        'player_penalty_goals' => $performance,
        'player_successful_crosses' => $performance,
        'player_assist_ability' => $performance,
        'player_chances_creation' => $performance,
        'player_penalties_winnings' => $performance,
        'player_offsides' => $performance,
    ];
});
