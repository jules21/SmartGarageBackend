<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Mechanician;
use Faker\Generator as Faker;

$factory->define(Mechanician::class, function (Faker $faker) {
    return [
        'names' => $faker->name,
        'address' => $faker->address,
        'phone' => $faker->phoneNumber,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'garage_id' => function () {
            return factory(App\Garage::class)->create()->id;
        }
    ];
});