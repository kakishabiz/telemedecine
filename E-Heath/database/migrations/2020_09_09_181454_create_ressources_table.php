<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRessourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ressources', function (Blueprint $table) {
            $table->increments('id');
        $table->string('nomDuTp');
        $table->string('libelleDuTp');
        $table->integer('cours_id')->unsigned();
        
        });
        Schema::table('ressources', function($table) {
            $table->foreign('cours_id')->references('id')->on('cours');
        });
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('travaux_pratiques');
    }
}
