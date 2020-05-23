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
            $table->string('playlist_href')->nullable();
            $table->string('playlist_id')->nullable();
            $table->string('playlist_images')->nullable();
            $table->string('playlist_name')->nullable();
            $table->string('playlist_uri')->nullable();
            $table->string('playlist_owner')->nullable();
            $table->string('playlist_tracks')->nullable();
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
