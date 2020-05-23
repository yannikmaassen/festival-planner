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
            $table->integer('festival_id')->unsigned();
            $table->foreign('festival_id')->references('id')->on('festivals')->onDelete('cascade');
            $table->text('info_text')->nullable();
            $table->text('todo_list')->nullable();
            $table->string('playlist_1')->nullable();
            $table->string('playlist_2')->nullable();
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
