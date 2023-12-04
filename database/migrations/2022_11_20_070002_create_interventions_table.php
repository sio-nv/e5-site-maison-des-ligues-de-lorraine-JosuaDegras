<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interventions', function (Blueprint $table) {
            $table->increments('id_inter');
            $table->integer('numSalle');
            $table->unsignedInteger('numIntervenant');
            $table->date('date');
            $table->time('heure');
            $table->text('motif');

            $table->foreign('numSalle')->references('numeroSalle')->on('salles');
            $table->foreign('numIntervenant')->references('numeroInter')->on('intervenants');
            
            $table->charset = 'utf8mb4';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interventions');
    }
};
