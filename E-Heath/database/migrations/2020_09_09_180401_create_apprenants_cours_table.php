<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateApprenantsCoursTable extends Migration

{
  


    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){  
    Schema::create('apprenants_cours', function (Blueprint $table){
        $table->increments('id');
        $table->integer('cours_id')->unsigned();
        $table->integer('apprenant_id')->unsigned();
  
    });
        Schema::table('apprenants_cours', function(Blueprint $table) {
            $table->foreign('cours_id')->references('id')->on('cours')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
        });
        Schema::table('apprenants_cours', function(Blueprint $table) {
            $table->foreign('apprenant_id')->references('id')->on('apprenants')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
        });
   
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apprenants_cours');
    }
}

