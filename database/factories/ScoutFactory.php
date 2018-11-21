<?php

use Faker\Generator as Faker;
use App\User;

$factory->define(App\Scout::class, function (Faker $faker) {
    $gender = $faker->randomElement($array = array('male', 'female', 'mixed'));
    $user = $faker->randomElement(User::where('type', 'scout')->get());

    return [
        'user_id' => $user->id,
        'scout_image_id' => $faker->numberBetween(1,20),
        'scout_team_id' => $faker->numberBetween(50,100),
        'scout_dob' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'scout_address' => $faker->address,
        'scout_licence' => $faker->numberBetween(1,20),
        'scout_gender' => $gender,
        'scout_status_id' => $faker->numberBetween(30,400),
        'scout_notes' => $faker->text,
    ];
});
