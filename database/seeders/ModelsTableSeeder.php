<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ModelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('models')->insert
        (
            [
                'brand_id' =>   1 ,
                'name' =>   'Roma' ,
                'image_url' =>   'https://res.cloudinary.com/unix-center/image/upload/c_lfill,dpr_auto,f_auto,fl_progressive,g_center,h_108,q_auto,w_270/v1494399868/s3noq9v76n2imne1sdti.png' ,
                'created_at'=>  Carbon::now(),
            ],
        );


        DB::table('models')->insert
        (
            [
                'brand_id' =>   1 ,
                'name' =>   'Monza' ,
                'image_url' =>   'https://res.cloudinary.com/unix-center/image/upload/c_lfill,dpr_auto,f_auto,fl_progressive,g_center,h_108,q_auto,w_270/v1478980623/xr82bubcz2o9qxwsegyt.png' ,
                'created_at'=>  Carbon::now(),
            ],
        );

        DB::table('models')->insert
        (
            [
                'brand_id' =>   2,
                'name' =>   'Urus' ,
                'image_url' =>   'https://res.cloudinary.com/unix-center/image/upload/c_lfill,dpr_auto,f_auto,fl_progressive,g_center,h_108,q_auto,w_270/v1542727079/vjj7kn0pwivg9m64xd3r.png' ,
                'created_at'=>  Carbon::now(),
            ],
        );


        DB::table('models')->insert
        (
            [
                'brand_id' =>   2,
                'name' =>   'Gallardo' ,
                'image_url' =>   'https://res.cloudinary.com/unix-center/image/upload/c_lfill,dpr_auto,f_auto,fl_progressive,g_center,h_108,q_auto,w_270/v1573743772/tfgvvsuaydikw5ad1yds.png' ,
                'created_at'=>  Carbon::now(),
            ],
        );

        DB::table('models')->insert
        (
            [
                'brand_id' =>   3,
                'name' =>   'Maybach' ,
                'image_url' =>   'https://res.cloudinary.com/unix-center/image/upload/c_lfill,dpr_auto,f_auto,fl_progressive,g_center,h_108,q_auto,w_270/v1437469088/xptowzpxevak9utfbz2g.png' ,
                'created_at'=>  Carbon::now(),
            ],
        );

    }
}
