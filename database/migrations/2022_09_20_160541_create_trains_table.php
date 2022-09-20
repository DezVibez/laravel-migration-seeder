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
            $table->string('Azienda', 20);
            $table->string('Stazione_di_partenza', 20);
            $table->string('Stazione_di_arrivo', 20);
            $table->float('Orario_di_partenza', 5, 2);
            $table->float('Orario_di_arrivo', 5, 2);
            $table->string('Codice_treno', 10);
            $table->string('Numero_carrozze');
            $table->boolean('in_orario');
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
