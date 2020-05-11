<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Planner;
use Faker\Generator as Faker;

$factory->define(Planner::class, function (Faker $faker) {
    return [
        'todo_list' => $faker->name,
        'playlist' => $faker->company,
        'planner_image' => $faker->paragraph
    ];
});
