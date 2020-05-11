<?php

use Illuminate\Database\Seeder;

class PlannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Planner::class, 5)->create();
    }
}
