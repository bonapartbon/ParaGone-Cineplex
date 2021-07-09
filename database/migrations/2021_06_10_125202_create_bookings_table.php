<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('movieName');
            $table->string('bookingStatus');
            $table->string('bookingType');
            $table->string('bookingDate');
            $table->string('bookingTime');
            $table->integer('bookingTicket');
            $table->string('bookingName');
            $table->string('bookingEmail');
            $table->string('bookingPNumber');
            $table->integer('total');
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
        Schema::dropIfExists('bookings');
    }
}
