<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicines', function (Blueprint $table) {
            $table->bigIncrements('id');
//            $table->string('name');
//            $table->string('type');
//            $table->integer('file_no');
//            $table->date('production_date');
//            $table->date('expiry_date');
//            $table->integer('price');
//            $table->string('company_name');
//            $table->integer('currency');
            $table->timestamps();





        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicines');
    }
}
