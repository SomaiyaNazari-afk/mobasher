<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddFieldUsersTable extends Migration
{

    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('country_id');
            $table->foreign('country_id')->references('id')->on('users')->change();
            $table->unsignedBigInteger('province_id');
            $table->foreign('province_id')->references('id')->on('users')->change();
        });
    }

    public function down()
    {
        Schema::table('users', function($table) {
            $table->dropColumn('country_id');
            $table->dropColumn('province_id');
        });
    }
}
