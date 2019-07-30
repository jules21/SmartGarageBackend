<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGarageServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('garage_service', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('garage_id');
            $table->integer('service_id');
            // $table->timestamps();
            // $table->foreign('garage_id')->references('id')->on('garages')->onDelete('cascade');
            // $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('garage_service');
    }
}
