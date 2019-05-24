<?php

use Faker\Generator as Faker;

$factory->define(Iplayfootball\Status::class, function (Faker $faker) {
    $status = $faker->randomElement($array = array('Active', 'Pending', 'Inactive', 'Everyone', 'Academics', 'Teams', 'Scouts', 'Players', 'Admins'));
    return [
        'status_text' => $status,
        'status_desc' => $faker->text,
    ];
});
