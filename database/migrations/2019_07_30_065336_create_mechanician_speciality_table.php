<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMechanicianSpecialityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mechanician_speciality', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('mechanician_id');
            $table->integer('speciality_id');
            $table->timestamps();
            // $table->foreign('mechanician_id')->references('id')->on('mechanicians')->onDelete('cascade');
            // $table->foreign('speciality_id')->references('id')->on('specialities')->onDelete('cascade');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mechanician_speciality');
    }
}
