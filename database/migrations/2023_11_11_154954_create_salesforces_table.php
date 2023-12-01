<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesforcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salesforces', function (Blueprint $table) {
            $table->id();
            $table->string('nama_sf');
            $table->string('kode_sf');
            $table->string('spv_id');
            $table->string('agency_id');
            $table->string('hp_sf');
            $table->string('gender_sf');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salesforces');
    }
}
