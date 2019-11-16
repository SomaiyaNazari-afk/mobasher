<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlterCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('countries', function (Blueprint $table) {
            $table->renameColumn('id','country_id');

        });
    }

    public function down()
    {
        Schema::table('countries', function (Blueprint $table) {
            $table->renameColumn('country_id', 'id');

        });
    }
}
