<?php

use Faker\Generator as Faker;

$factory->define(Iplayfootball\Message::class, function (Faker $faker) {
    $type = $faker->randomElement($array = array('scout', 'player', 'user', 'team', 'academie'));
    return [
        'message_subject' => $faker->title,
        'message_body' => $faker->text,
        'message_type' => $faker->numberBetween(1,4),
        'message_sender_id' => $faker->numberBetween(1,20),
        'message_receiver_id' => $faker->numberBetween(1,20),
        'message_receiver_role' => $type,
        'message_status_id' => $faker->numberBetween(1,4),
        'message_sender_role' => $type,
    ];
});
