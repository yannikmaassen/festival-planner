<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('planners')->insert([[
            'created_at' => now(),
            'updated_at' => now(),
            'name' => 'Rock am Ring',
            'start_date' => '05.06.2020',
            'end_date' => '07.06.2020',
            'genre_1' => 'Rock',
            'genre_2' => 'Alternative',
            'genre_3' => 'Metal',
            'genre_4' => '',
            'genre_5' => '',
            'headliner_1' => 'System of a Down',
            'headliner_2' => 'Green Day',
            'headliner_3' => 'Volbeat',
            'headliner_4' => '',
            'headliner_5' => '',
            'description' => 'Rock am Ring is a nice festival.',
            'todo_list' => '',
            'playlist' => '',
            'planner_image' => '',
        ], [
            'created_at' => now(),
            'updated_at' => now(),
            'name' => 'Hurricane Festival',
            'start_date' => '22.06.2020',
            'end_date' => '24.06.2020',
            'genre_1' => 'Rock',
            'genre_2' => '',
            'genre_3' => '',
            'genre_4' => '',
            'genre_5' => '',
            'headliner_1' => 'Seeed',
            'headliner_2' => 'Martin Garrix',
            'headliner_3' => 'The Killers',
            'headliner_4' => '',
            'headliner_5' => '',
            'description' => 'Hurricane is a nice festival.',
            'todo_list' => '',
            'playlist' => '',
            'planner_image' => '',
        ], [
            'created_at' => now(),
            'updated_at' => now(),
            'name' => 'Glastonbury Festival',
            'start_date' => '22.07.2020',
            'end_date' => '25.07.2020',
            'genre_1' => 'HipHop',
            'genre_2' => '',
            'genre_3' => '',
            'genre_4' => '',
            'genre_5' => '',
            'headliner_1' => 'Billie Eilish',
            'headliner_2' => 'Eminem',
            'headliner_3' => 'David Guetta',
            'headliner_4' => '',
            'headliner_5' => '',
            'description' => 'Glastonbury is a great festival.',
            'todo_list' => '',
            'playlist' => '',
            'planner_image' => '',
        ]]);
    }
}
