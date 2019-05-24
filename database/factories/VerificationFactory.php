<?php

use Faker\Generator as Faker;

$factory->define(Iplayfootball\Verification::class, function (Faker $faker) {
    $type = $faker->randomElement($array = array('scout', 'player', 'user', 'team', 'academie'));
    return [
        "verification_user_id" => $faker->numberBetween(1,20),
        "verification_type" => $type, 
        "verification_firstfile_id" => $faker->numberBetween(1,20),
        "verification_secondfile_id" => $faker->numberBetween(1,20),
        "verification_state_id" => $faker->numberBetween(1,4),
        "verification_status_id" => $faker->numberBetween(10,11),
    ];
});
