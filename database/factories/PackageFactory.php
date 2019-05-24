<?php

use Faker\Generator as Faker;

$factory->define(Iplayfootball\Package::class, function (Faker $faker) {
        $package = $faker->randomKey($array = array('Silver', 'Gold', 'Premium'));
    return [
        'name' => $package,
        'price' => $faker->randomNumber(2),
        'desc' => $faker->text,
    ];
});
