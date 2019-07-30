<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Garage;
use Faker\Generator as Faker;

$factory->define(Garage::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'address' => $faker->address,
        // 'email' => $faker->unique()->safeEmail,
        // 'email_verified_at' => now(),
        // 'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        // 'remember_token' => Str::random(10),
    ];
});
