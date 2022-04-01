<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                'name'=>'testUser',
                'email'=>Hash::make('noName').'@gmail.com',
                'address'=>'123',
                'password'=>Hash::make('123')

            ]
            );
    }
}
