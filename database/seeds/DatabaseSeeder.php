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
        // $this->call(UsersTableSeeder::class);
       factory(App\Garage::class, 10)->create();
       factory(App\Service::class, 10)->create();
       factory(App\Sparepart::class, 10)->create();
       factory(App\Speciality::class, 10)->create();
       factory(App\Mechanician::class, 30)->create();
    }
}
