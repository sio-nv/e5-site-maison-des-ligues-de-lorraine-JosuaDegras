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
        Schema::create('ouvrages', function (Blueprint $table) {
            //l'attribut "cote" est un entier
            $table->integer('cote');
            //l'attribut "auteur" est une chaîne qui peut être NULL
            $table->string('auteur', 50)->nullable();
            //l'attribut "titre" est une chaîne qui peut être NULL
            $table->text('titre')->nullable();
            //l'attribut "anneeParution" est une année qui peut être NULL
            $table->year('anneeParution')->nullable();
            //l'attribut "telephone" est une chaîne qui peut être NULL
            $table->string('type',30)->nullable();
            //l'attribut "urlImage" est une chaîne qui peut être NULL
            $table->text('urlImage')->nullable();

            //la clé primaire est "cote"
            $table->primary('cote');
            //le jeu de caractères à utiliser
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
        Schema::dropIfExists('ouvrages');
    }
};
