<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReunionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reunions', function (Blueprint $table) {
            $table->increments('id');
           
            $table->string('libelle');
            $table->string('description');
            $table->string('date');
            $table->string('heure');
            $table->string('url');
            $table->string('idmeeting');
            $table->integer('prof_id')->unsigned();
            $table->integer('med_id')->unsigned();
            });
            Schema::table('reunions', function($table) {
                $table->foreign('med_id')->references('id')->on('medecins');
            });
            Schema::table('reunions', function($table) {
                $table->foreign('prof_id')->references('id')->on('professeurs');
            });
        }
    
        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::dropIfExists('reunions');
        }
    }