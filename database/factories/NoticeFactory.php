<?php

use Faker\Generator as Faker;

$factory->define(Iplayfootball\Notice::class, function (Faker $faker) {
    return [
        'notice_title' => $faker->text(40),
        'notice_desc' => $faker->text,
        'notice_enddate' => $faker->dateTime('2018-12-1 12:00:00'),
        'notice_startdate' => $faker->dateTime($max = 'now'),
        'notice_publishdate' => $faker->dateTime($max = 'now'),
        'notice_visibility_id' => $faker->numberBetween(4,9),
        'notice_status_id' => $faker->numberBetween(1,3),
    ];
});
