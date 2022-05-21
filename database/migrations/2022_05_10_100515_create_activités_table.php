<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitésTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activités', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('type');
            $table->string('salle');
            $table->string('définition');
            $table->string('objectifs');
            $table->string('cible');
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
        Schema::dropIfExists('activités');
    }
}
