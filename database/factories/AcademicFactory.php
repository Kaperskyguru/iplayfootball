<?php
use App\User;
use Faker\Generator as Faker;

$factory->define(App\Academic::class, function (Faker $faker) {
    $user = $faker->randomElement(User::where('type', 'academic')->get());
    return [
        'user_id' => $user->id,
        'academic_image_id' => $faker->numberBetween(1,20),
        'academic_package_id' => $faker->numberBetween(1,3),
        'academic_facebook_id' => $faker->numberBetween(1,20),
        'academic_address' => $faker->address,
        'academic_status_id' => $faker->numberBetween(1,3),
        'academic_package_id' => $faker->numberBetween(1,10),
    ];
});
