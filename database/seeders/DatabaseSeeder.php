<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        $this->call(UsersTableSeeder::class);
        $this->call(BrandsTableSeeder::class);
        $this->call(ModelsTableSeeder::class);
        $this->call(CarsTableSeeder::class);
        $this->call(PackagesTableSeeder::class);
        //$this->call(RentalsTableSeeder::class);
    }
}
