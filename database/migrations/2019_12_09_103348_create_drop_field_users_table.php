<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDropFieldUsersTable extends Migration
{

    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('country');
            $table->dropColumn('city');
        });

    }

    public function down()
    {
        Schema::table('users', function($table) {
            $table->varchar('country');
            $table->varchar('city');
        });
    }
}
