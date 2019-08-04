<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
    //    factory(App\Garage::class, 10)->create();
    //    factory(App\Service::class, 10)->create();
       factory(App\Sparepart::class, 10)->create();
    //    factory(App\Mechanician::class, 30)->create();
    //    factory(App\Speciality::class, 10)->create();

    //    factory(App\Mechanician::class,20)->create()->each(function ($a) {
    //     $a->specialities()->attach(
    //         \App\Speciality::all()->random()->id
    //     );
    // });

    $garages = factory(App\Garage::class, 30)->create();
    $services = factory(App\Service::class, 20)->create();

    $recipes = factory(App\Mechanician::class, 30)->create();
    $ingredients = factory(App\Speciality::class, 20)->create();

    $recipes->each(function (App\Mechanician $r) use ($ingredients) {
        $r->specialities()->attach(
            $ingredients->random(rand(5, 10))->pluck('id')->toArray()
        );
    });

    $garages->each(function (App\Garage $r) use ($services) {
        $r->services()->attach(
            $services->random(rand(5, 10))->pluck('id')->toArray()
        );
    });
    }
}
