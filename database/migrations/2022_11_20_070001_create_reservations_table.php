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
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id_resa');
            $table->date('dateres');
            $table->time('heuredeb');
            $table->time('heurefin');
            $table->char('batiment',1);
            $table->text('complement')->nullable();
            $table->text('motif')->nullable();
            $table->char('codeclient',9);
            $table->integer('numsalle');

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
            
            $table->foreign('numSalle')->references('numeroSalle')->on('salles');
            $table->foreign('codeclient')->references('codeCli')->on('clients');

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
        Schema::dropIfExists('reservations');
    }
};
