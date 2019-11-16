<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvincesTable extends Migration
{

    public function up()
    {
        Schema::create('provinces', function (Blueprint $table) {
            $table->bigIncrements('province_id');
            $table->integer('province_code');
            $table->string('province_name');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('provinces');
    }
}
