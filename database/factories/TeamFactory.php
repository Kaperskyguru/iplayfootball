<?php
use Faker\Generator as Faker;
use App\User;

$factory->define(App\Team::class, function (Faker $faker) {
    $user = $faker->randomElement(User::where('type', 'team')->get());
    return [
        'user_id' => $user->id,
        'type' => $faker->numberBetween(1,3),
        'image_id' => $faker->numberBetween(1,20),
        'address' => $faker->address,
        'status_id' => $faker->numberBetween(1,4),
    ];
});
