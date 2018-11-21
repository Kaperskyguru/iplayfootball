<?php

use Faker\Generator as Faker;

$factory->define(App\Status::class, function (Faker $faker) {
    $status = $faker->randomKey($array = array('Active', 'Inactive', 'Pending'));
    return [
        'status_text' => $status,
        'status_desc' => $faker->text,
    ];
});
