<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAltersUsersTable extends Migration
{

    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('gender')->nullable()->change();
            $table->string('dob')->nullable()->change();
            $table->string('country')->nullable()->change();
            $table->string('city')->nullable()->change();
            $table->string('address')->nullable()->change();
        });
    }


    public function down()
    {
        Schema::dropIfExists('users');
    }
}
