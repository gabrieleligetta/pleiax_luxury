<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RentalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        for ($i=0; $i<30; $i++)
//        {
//            $user_id =  rand(1, 30);
//            $car_id = rand(1, 30);
//            $rental_start = Carbon::now();
//            $rental_end = Carbon::now();
//            $package_id = rand(1, 4);
//            DB::table('rentals')->insert
//            ([
//                'user_id' =>   $user_id ,
//                'car_id' =>    $car_id,
//                'rental_start' => $rental_start,
//                'rental_end' =>  $rental_end,
//                'package_id' => $package_id,
//                'created_at'=>  Carbon::now(),
//            ]);
//        }
    }
}
