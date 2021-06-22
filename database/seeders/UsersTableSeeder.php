<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws \GuzzleHttp\Exception\GuzzleException
     */

    public function run()
    {
        DB::table('users')->insert([
            'firstname' => 'TestUser',
            'lastname' => 'TestUser',
            'email' => 'TestUser@pleiax.it',
            'password' =>  Hash::make('Pleiax2021'),
            'created_at'=>  Carbon::now(),
            'email_verified_at' =>  Carbon::now()
        ]);

        $client = new \GuzzleHttp\Client();


        for ($i=0; $i<30; $i++) {
            $response = $client->get('https://randomuser.me/api/');
            $body = $response->getBody();
            $body = json_decode($body);
            $user = $body->results[0];
            DB::table('users')->insert([
                'firstname' => $user->name->first,
                'lastname' => $user->name->last,
                'email' => $user->email,
                'password' =>  Hash::make('Pleiax2021'),
                'created_at'=>  Carbon::now(),
                'email_verified_at' =>  Carbon::now()
            ]);
        }
    }
}
