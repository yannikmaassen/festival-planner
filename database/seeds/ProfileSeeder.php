<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profiles')->insert([[
            'id' => '1',
            'created_at' => now(),
            'updated_at' => now(),
            'user_id' => '1',
            'profile_name' => 'Test Tester',
            'profile_description' => 'Lorem Ipsum dolor sit amet.',
            'festival_id' => '2',
            'profile_list' => 'Testware',
            'profile_image' => ''
        ], [
            'id' => '2',
            'created_at' => now(),
            'updated_at' => now(),
            'user_id' => '2',
            'profile_name' => 'Testo Tester',
            'profile_description' => 'Amet sit dolor ipsum lorem.',
            'festival_id' => '4',
            'profile_list' => 'Testoware',
            'profile_image' => ''
        ]]);
    }
}
