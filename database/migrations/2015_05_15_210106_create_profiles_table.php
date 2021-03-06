<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->nullable();
            $table->string('profile_name')->nullable();
            $table->string('profile_image')->nullable();
            $table->text('profile_description')->nullable();
            $table->string('festival_id')->nullable();
            $table->text('profile_list')->nullable();
            $table->text('artist_uri')->nullable();
            $table->text('artist_genres')->nullable();
            $table->text('artist_href')->nullable();
            $table->text('artist_id')->nullable();
            $table->text('artist_images')->nullable();
            $table->text('artist_name')->nullable();
        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
