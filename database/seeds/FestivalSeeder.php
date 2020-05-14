<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FestivalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('festivals')->insert([
            [
                'created_at' => now(),
                'updated_at' => now(),
                'festival_name' => 'Rock am Ring',
                'start_date' => '11.06.2021',
                'end_date' => '13.06.2021',
                'location' => 'Nürburgring/Eifel',
                'genres' => 'Rock - Alternative - Metal',
            ], [
                'created_at' => now(),
                'updated_at' => now(),
                'festival_name' => 'Hurricane Festival',
                'start_date' => '18.06.2021',
                'end_date' => '20.06.2021',
                'location' => 'Scheeßel',
                'genres' => 'Rock - Alternative - HipHop',
            ], [
                'created_at' => now(),
                'updated_at' => now(),
                'festival_name' => 'Airbeat One Festival',
                'start_date' => '18.07.2021',
                'end_date' => '20.07.2021',
                'location' => 'Neustadt-Glewe',
                'genres' => 'EDM - Electro - Hardstyle',
            ], [
                'created_at' => now(),
                'updated_at' => now(),
                'festival_name' => 'Sea You Festival',
                'start_date' => '18.07.2021',
                'end_date' => '19.07.2021',
                'location' => 'Freiburg',
                'genres' => 'House - Electro - Techno',
            ], [
                'created_at' => now(),
                'updated_at' => now(),
                'festival_name' => 'Parookaville',
                'start_date' => '17.07.2021',
                'end_date' => '19.07.2021',
                'location' => 'Weeze',
                'genres' => 'EDM - Electro - Techno',
            ], [
                'created_at' => now(),
                'updated_at' => now(),
                'festival_name' => 'Wacken Open Air',
                'start_date' => '30.07.2021',
                'end_date' => '01.08.2021',
                'location' => 'Wacken',
                'genres' => 'Metal - Hard Rock - Rock',
            ], [
                'created_at' => now(),
                'updated_at' => now(),
                'festival_name' => 'Nature One',
                'start_date' => '31.07.2021',
                'end_date' => '02.08.2021',
                'location' => 'Kastellaun',
                'genres' => 'Electro - House - Techno',
            ], [
                'created_at' => now(),
                'updated_at' => now(),
                'festival_name' => 'MS Dockville',
                'start_date' => '21.07.2021',
                'end_date' => '23.07.2021',
                'location' => 'Hamburg',
                'genres' => 'Electro - Alternative - Techno',
            ], [
                'created_at' => now(),
                'updated_at' => now(),
                'festival_name' => 'Lollapalooza',
                'start_date' => '05.08.2021',
                'end_date' => '06.08.2021',
                'location' => 'Berlin',
                'genres' => 'Rock - Pop - EDM',
            ], [
                'created_at' => now(),
                'updated_at' => now(),
                'festival_name' => 'Mayday',
                'start_date' => '30.08.2021',
                'end_date' => '30.08.2021',
                'location' => 'Dortmund',
                'genres' => 'Electro - House - Techno',
            ], [
                'created_at' => now(),
                'updated_at' => now(),
                'festival_name' => 'Rock im Park',
                'start_date' => '11.06.2021',
                'end_date' => '13.06.2021',
                'location' => 'Nürburg/Nürnberg',
                'genres' => 'Rock - Alternative - Metal',
            ], [
                'created_at' => now(),
                'updated_at' => now(),
                'festival_name' => 'World Club Dome',
                'start_date' => '05.06.2021',
                'end_date' => '07.06.2021',
                'location' => 'Frankfurt',
                'genres' => 'EDM - Techno - Electro',
            ], [
                'created_at' => now(),
                'updated_at' => now(),
                'festival_name' => 'Southside Festival',
                'start_date' => '18.06.2021',
                'end_date' => '20.06.2021',
                'location' => 'Neuhausen ob Eck',
                'genres' => 'Rock - Alternative - HipHop',
            ], [
                'created_at' => now(),
                'updated_at' => now(),
                'festival_name' => 'Afrika-Karibik-Festival',
                'start_date' => '18.08.2021',
                'end_date' => '20.08.2021',
                'location' => 'Aschaffenburg',
                'genres' => 'Reggae - Dancehall - HipHop',
            ], [
                'created_at' => now(),
                'updated_at' => now(),
                'festival_name' => 'SonneMondSterne',
                'start_date' => '19.08.2021',
                'end_date' => '21.08.2021',
                'location' => 'Saalburg',
                'genres' => 'Techno - Electro - House',
            ], [
                'created_at' => now(),
                'updated_at' => now(),
                'festival_name' => 'Africa Festival',
                'start_date' => '19.06.2021',
                'end_date' => '21.06.2021',
                'location' => 'Würzburg',
                'genres' => 'Weltmusik',
            ], [
                'created_at' => now(),
                'updated_at' => now(),
                'festival_name' => 'Splash Festival',
                'start_date' => '19.07.2021',
                'end_date' => '21.07.2021',
                'location' => 'Gräfenhainichen',
                'genres' => 'HipHop - Rap - Alternative',
            ]
        ]);
    }
}
