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
        DB::table('users')->insert([
            'user_name' => 'tester',
            'email' => 'test@test.com',
            'email_verified_at' => now(),
            'password' => Hash::make('test'),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
            'profile_name' => 'Test Tester',
            'description' => 'Lorem Ipsum dolor sit amet.',
            'music' => '',
            'profile_list' => 'Testware',
            'profile_image' => ''
        ]);
    }
}
