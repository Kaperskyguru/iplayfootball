<?php

use Faker\Generator as Faker;
use Iplayfootball\User;

$factory->define(Iplayfootball\Scout::class, function (Faker $faker) {
    $gender = $faker->randomElement($array = array('male', 'female'));
    return [
        'scout_name' => $faker->name($gender),
        'scout_phone' => $faker->e164PhoneNumber,
        'scout_state' => $faker->state,
        'scout_email' => $faker->unique()->safeEmail,
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
