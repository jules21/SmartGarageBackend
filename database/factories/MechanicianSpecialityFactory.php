<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Garage;
use App\Speciality;
use Faker\Generator as Faker;
use App\Mechanician_speciality;

$factory->define(Mechanician_speciality::class, function (Faker $faker) {
    return [
        //
        'garage_id' => \App\Garage::all()->random()->id,
        'speciality_id' => \App\Speciality::all()->random()->id,
    ];
});
