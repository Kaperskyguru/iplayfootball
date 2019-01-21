<?php
use App\User;
use Faker\Generator as Faker;

$factory->define(App\Academic::class, function (Faker $faker) {
    $gender = $faker->randomElement($array = array('male', 'female'));
    return [
        'academic_name' => $faker->name($gender),
        'academic_phone' => $faker->e164PhoneNumber,
        'academic_state' => $faker->state,
        'academic_email' => $faker->unique()->safeEmail,
        'academic_image_id' => $faker->numberBetween(1,20),
        'academic_package_id' => $faker->numberBetween(1,3),
        'academic_facebook_id' => $faker->numberBetween(1,20),
        'academic_address' => $faker->address,
        'academic_status_id' => $faker->numberBetween(1,3),
        'academic_package_id' => $faker->numberBetween(1,10),
    ];
});
