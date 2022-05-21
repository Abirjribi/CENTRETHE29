<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prénom');
            $table->string('age');
            $table->foreignId('activité_id')-> constrained('activités') ;
            $table->string('activité_id')-> constrained('activités');
            $table->string('activité_id')-> constrained('activités');
            $table->string('nom parent1');
            $table->string('nom parent2');
            $table->string('montant');
            $table->string('sexe');
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
        Schema::dropIfExists('participants');
    }
}
