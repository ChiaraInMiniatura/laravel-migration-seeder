<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();

            $table->string('Azienda', '150');
            $table->string('Stazione di partenza', '80');
            $table->string('Stazione di arrivo', '80');
            $table->timeTz('Orario di partenza', '2');
            $table->timeTz('Orario di arrivo', '2');
            $table->string('Codice Treno', '15');
            $table->integer('Numero Carrozze');
            $table->boolean('In orario');
            $table->boolean('Cancellato');

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
        Schema::dropIfExists('trains');
    }
}
