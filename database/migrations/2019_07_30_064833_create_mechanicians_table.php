<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMechaniciansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mechanicians', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('names');
            $table->string('email');
            $table->string('password');
            $table->string('phone');
            $table->string('address');
            $table->string('location')->nullable();
            $table->string('garage_id');
            $table->timestamps();
            // $table->foreign('garage_id')->references('id')->on(garages)->onDelete(cascade);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mechanicians');
    }
}
