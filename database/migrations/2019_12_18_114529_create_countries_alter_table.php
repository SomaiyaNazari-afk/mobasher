<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesAlterTable extends Migration
{

    public function up()
    {
       Schema::table('countries', function (Blueprint $table) {
                $table->renameColumn('country_id', 'id');
            });
    }

    public function down()
    {
        Schema::dropIfExists('countries');
    }
}
