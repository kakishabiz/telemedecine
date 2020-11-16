<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cours', function (Blueprint $table) {
        $table->increments('id');
           
        $table->string('nomDucours');
        $table->string('libelleCours');
        $table->string("formation");
        $table->integer('prof_id')->unsigned();
        $table->string('date');
        });
        Schema::table('cours', function($table) {
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
        Schema::dropIfExists('cours');
       
    }
}
