<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlterProvinceTable extends Migration
{

    public function up()
    {
        Schema::table('provinces', function (Blueprint $table) {
            $table->renameColumn('province_id', 'id');
        });
    }

}
