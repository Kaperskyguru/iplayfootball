<?php
use Faker\Generator as Faker;
use Iplayfootball\User;

$factory->define(Iplayfootball\Team::class, function (Faker $faker) {
    $gender = $faker->randomElement($array = array('male', 'female'));
    return [
        'name' => $faker->name($gender),
        'phone' => $faker->e164PhoneNumber,
        'state' => $faker->state,
        'email' => $faker->unique()->safeEmail,
        'type' => $faker->numberBetween(1,3),
        'image_id' => $faker->numberBetween(1,20),
        'address' => $faker->address,
        'status_id' => $faker->numberBetween(1,4),
    ];
});
