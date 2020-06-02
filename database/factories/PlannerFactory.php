<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Planner;
use Faker\Generator as Faker;

$factory->define(Planner::class, function (Faker $faker) {
    return [
        'festival_id' => '8',
        'info_text' => $faker->paragraph,
    ];
});
