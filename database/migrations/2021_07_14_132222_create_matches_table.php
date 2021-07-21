<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table -> id();
            $table -> timestamps();
            $table -> date ('date_match');
            $table -> time ('time_match');
            $table -> string ('city', 50);
            $table -> string ('stadium_name', 50);
            $table -> string ('referee', 50);
            $table -> string ('local_team_name', 50); 
            $table -> integer ('local_score')->nullable();             
            $table -> string ('visitor_team_name', 50); 
            $table -> integer ('visitor_score')->nullable(); 
            $table -> string ('status', 10);                           
            $table -> text ('aditional_info')->nullable();
            $table -> unsignedBigInteger('user_id')->nullable(); //para cruzarlo con el usuario que lo tiene asignado.
            $table->foreign('user_id')->references ('id')->on('users')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matches');
    }
}
