<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('packages')->insert
        ([
            'name' =>   'Pacchetto Small' ,
            'price' =>   300 ,
            'kilometers' => 1000,
            'created_at'=>  Carbon::now(),
        ]);

        DB::table('packages')->insert
        ([
            'name' =>   'Pacchetto Medium' ,
            'price' =>   500 ,
            'kilometers' => 3000,
            'created_at'=>  Carbon::now(),
        ]);

        DB::table('packages')->insert
        ([
            'name' =>   'Pacchetto Large' ,
            'price' =>   800 ,
            'kilometers' => 5000,
            'created_at'=>  Carbon::now(),
        ]);

        DB::table('packages')->insert
        ([
            'name' =>   'Pacchetto Extra Large' ,
            'price' =>   1000 ,
            'kilometers' => 10000,
            'created_at'=>  Carbon::now(),
        ]);

    }
}
