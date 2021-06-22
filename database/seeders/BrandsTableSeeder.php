<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert
        (
            [
            'name' =>   'Ferrari' ,
            'created_at'=>  Carbon::now(),
            ],
        );

        DB::table('brands')->insert
        (
            [
                'name' =>   'Lamborghini' ,
                'created_at'=>  Carbon::now(),
            ],
        );

        DB::table('brands')->insert
        (
            [
                'name' =>   'Mercedes' ,
                'created_at'=>  Carbon::now(),
            ],
        );
    }
}
