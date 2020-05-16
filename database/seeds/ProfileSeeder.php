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
            'profile_name' => 'Test Tester',
            'description' => 'Lorem Ipsum dolor sit amet.',
            'music' => '',
            'profile_list' => 'Testware',
            'profile_image' => ''
        ], [
            'id' => '2',
            'created_at' => now(),
            'updated_at' => now(),
            'profile_name' => 'Testo Tester',
            'description' => 'Amet sit dolor ipsum lorem.',
            'music' => '',
            'profile_list' => 'Testoware',
            'profile_image' => ''
        ]]);
    }
}
