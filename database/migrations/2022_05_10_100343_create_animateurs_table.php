<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animateurs', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prénom');
            $table->string('téléphone');
            $table->string('mail');
            $table->string('spécialité');
            $table->string('adresse');
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
        Schema::dropIfExists('animateurs');
    }
}
