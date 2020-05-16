<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('users')->insert([[
            'id' => '1',
            'user_name' => 'tester',
            'email' => 'test@test.com',
            'email_verified_at' => now(),
            'password' => Hash::make('test'),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
            'profile_id' => '1'
        ], [
            'id' => '2',
            'user_name' => 'testo',
            'email' => 'testo@test.de',
            'email_verified_at' => now(),
            'password' => Hash::make('testotesto'),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
            'profile_id' => '2'
        ]]);
    }
}
