<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlterProvincesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::table('provinces', function (Blueprint $table) {
                $table->string('province_code')->change();
        });
    }

    public function down()
    {
        Schema::dropIfExists('provinces');
    }
}
