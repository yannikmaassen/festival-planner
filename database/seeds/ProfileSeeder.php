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
            'profile_name' => 'Yannik Maaßen',
            'profile_description' => 'Hi, ich bin Yannnik. Ich gehe gerne auf Festivals.',
            'festival_id' => '2',
            'profile_list' => 'Wasser, Ticket, Zelt',
            'profile_image' => ''
        ], [
            'id' => '2',
            'created_at' => now(),
            'updated_at' => now(),
            'user_id' => '2',
            'profile_name' => 'Maik Riemann',
            'profile_description' => 'Moin moin! Maik mein Name!',
            'festival_id' => '4',
            'profile_list' => 'Pavillon, Zelt, Ticket',
            'profile_image' => ''
        ], [
            'id' => '3',
            'created_at' => now(),
            'updated_at' => now(),
            'user_id' => '3',
            'profile_name' => 'Mats Knop',
            'profile_description' => 'Moinsen! Bin der Mats und für jedes Festival zu haben.',
            'festival_id' => '7',
            'profile_list' => 'Pavillon, Zelt, Ticket',
            'profile_image' => ''
        ]]);
    }
}
