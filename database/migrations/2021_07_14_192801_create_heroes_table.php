<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeroesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('heroes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image')->nullable();
            $table->string('name')->nullable();
            $table->string('profession')->nullable();
            $table->string('facebooklink')->nullable();
            $table->string('instagramlink')->nullable();
            $table->string('twitterlink')->nullable();
            $table->string('youtubelink')->nullable();
            $table->string('linkedlink')->nullable();
            $table->string('github')->nullable();
            $table->string('cvlink')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('heroes');
    }
}
