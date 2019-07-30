<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Sparepart;
use Faker\Generator as Faker;

$factory->define(Sparepart::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'address' => $faker->address
    ];
});