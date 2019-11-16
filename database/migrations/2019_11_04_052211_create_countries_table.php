<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{

    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('country_code');
            $table->string('country_name');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('countries');
    }
}
