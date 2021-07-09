<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('movieImg');
            $table->string('movieTitle');
            $table->string('movieCurrent');
            $table->string('movieGenre');
            $table->integer('movieDuration');
            $table->date('movieRelDate');
            $table->string('movieDirector');
            $table->string('movieActors');
            $table->string('movieDes');
            $table->string('movieTrailer');

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
        Schema::dropIfExists('movies');
    }
}
