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
            'user_name' => 'Yannik Maaßen',
            'email' => 'yannik@maaßen.de',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ], [
            'id' => '2',
            'user_name' => 'Maik Riemann',
            'email' => 'maik@riemann.de',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ], [
            'id' => '3',
            'user_name' => 'Mats Knop',
            'email' => 'mats@knop.de',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ], [
            'id' => '4',
            'user_name' => 'Mewes Balzer',
            'email' => 'mewes@balzer.de',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ], [
            'id' => '5',
            'user_name' => 'Nico Clausen',
            'email' => 'nico@clausen.de',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]]);
    }
}
