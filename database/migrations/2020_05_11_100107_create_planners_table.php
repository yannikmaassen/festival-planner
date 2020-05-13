<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planners', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('genre_1')->nullable();
            $table->string('genre_2')->nullable();
            $table->string('genre_3')->nullable();
            $table->string('genre_4')->nullable();
            $table->string('genre_5')->nullable();
            $table->string('headliner_1')->nullable();
            $table->string('headliner_2')->nullable();
            $table->string('headliner_3')->nullable();
            $table->string('headliner_4')->nullable();
            $table->string('headliner_5')->nullable();
            $table->string('description');
            $table->string('todo_list')->nullable();
            $table->string('playlist')->nullable();
            $table->string('planner_image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('planners');
    }
}
