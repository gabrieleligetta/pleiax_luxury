<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<30; $i++) {
            $model_id =  rand(1, 5);
            $color = self::COLOR_NAMES[array_rand(self::COLOR_NAMES)];
            $matriculation_year = rand(1980, 2021);
            $license_plate = Str::random(7);
            $price = rand(40, 100);
            DB::table('cars')->insert
            ([
                'model_id' =>   $model_id ,
                'color' =>   $color ,
                'matriculation_year' => $matriculation_year,
                'license_plate' =>  $license_plate,
                'price' => $price,
                'created_at'=>  Carbon::now(),
            ]);
        }
    }


    const COLOR_NAMES = [
        "red",
        "white",
        "green",
        "black",
        "yellow",
        "gray",
    ];
}
