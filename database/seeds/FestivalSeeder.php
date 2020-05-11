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
            'id' => '1',
            'name' => 'Rock am Ring',
            'created_at' => now(),
            'updated_at' => now(),
            'start_date' => '05.06.2020',
            'end_date' => '07.06.2020',
            'genres' => 'Rock - Alternative - Metal',
            'headliner' => 'System of a Down - Green Day - Volbeat',
            'description' => 'Rock am Ring is a nice festival.'
        ], [
            'id' => '2',
            'name' => 'Hurricane Festival',
            'created_at' => now(),
            'updated_at' => now(),
            'start_date' => '22.06.2020',
            'end_date' => '24.06.2020',
            'genres' => 'Rock - Alternative - HipHop',
            'headliner' => 'Seeed - Martin Garrix - The Killers - Deichkind',
            'description' => 'Hurricane is a nice festival.'
        ], [
            'id' => '3',
            'name' => 'Glastonbury Festival',
            'created_at' => now(),
            'updated_at' => now(),
            'start_date' => '22.07.2020',
            'end_date' => '25.07.2020',
            'genres' => 'Rock - Alternative - HipHop',
            'headliner' => 'Billie Eilish - Eminem - David Guetta',
            'description' => 'Glastonbury is a great festival.'
        ]);
    }
}
