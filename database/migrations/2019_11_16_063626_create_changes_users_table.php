<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChangesUsersTable extends Migration
{
        public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('user_type')->nullable();
        });
    }


        public function down()
    {
        Schema::dropIfExists('users');
    }
}
