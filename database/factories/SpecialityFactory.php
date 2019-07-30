<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Speciality;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Speciality::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->word,
        'description' => $faker->paragraph,
    ];
});
