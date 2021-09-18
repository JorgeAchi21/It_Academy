<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Rooms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('room')->unique();
            $table->integer('guests'); //number of people max in the room
            $table->string('state'); //busy, free, reserved, out of order:ocupada, libre, reservada, sin uso
            $table->string('guestName')->nullable(); //guest, nombre del huesped
            $table->date('fromDate')->nullable(); //fecha inicio
            $table->date('toDate')->nullable(); //fecha fin
            $table->float('price'); //precio
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
        Schema::dropIfExists('rooms');
    }
}
