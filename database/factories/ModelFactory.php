<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Member::class, function (Faker\Generator $faker) {
    return [
        'oauth_client_id' => 1,
        'name' => $faker->name,
        'description' => $faker->sentence,
    ];
});



$factory->define(App\Reservation::class, function (Faker\Generator $faker) {
    return [
        'member_id' => 1,
        'start_daytime' => $faker->dateTimeBetween('now', '+30 days'),
        'end_daytime' => $faker->dateTimeBetween('+30 days', '+50 days'),
        'title' => $faker->sentence,
        'information' => $faker->text,
        'name' => $faker->name,

    ];
});


$factory->define(App\Event::class, function (Faker\Generator $faker) {
    return [
        'member_id' => 1,
        'title' => $faker->sentence,
        'description' => $faker->text,
    ];
});
