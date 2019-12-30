<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDropColUsersTable extends Migration
{

    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('city');

        });
    }


    public function down(){
        Schema::table('users', function($table) {
            $table->dropColumn('city');
        });
        }}
