<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dataps', function (Blueprint $table) {
            $table->id();
            $table->string('NO');
            $table->string('ORDER_ID');
            $table->string('AREA');
            $table->string('REGIONAL');
            $table->string('BRANCH');
            $table->string('CLUSTERS');
            $table->string('STO');
            $table->string('EXTERN_ORDER_ID');
            $table->string('JENIS_PSB');
            $table->string('TYPE_TRANSAKSI');
            $table->string('FLAG_DEPOSIT');
            $table->string('STATUS_RESUME');
            $table->string('STATUS_MESSAGE');
            $table->string('KCONTACT');
            $table->string('ORDER_DATE');
            $table->string('NCLI');
            $table->string('NDEM');
            $table->string('SPEEDY');
            $table->string('POTS');
            $table->string('CUSTOMER_NAME');
            $table->string('NO_HP');
            $table->string('EMAIL');
            $table->string('INSTALL_ADDRESS');
            $table->string('CUSTOMER_ADDRESS');
            $table->string('CITY_NAME');
            $table->string('GPS_LATITUDE');
            $table->string('GPS_LONGITUDE');
            $table->string('PACKAGE_NAME');
            $table->string('LOC_ID');
            $table->string('DEVICE_ID');
            $table->string('AGENT_ID');
            $table->string('WFM_ID');
            $table->string('SCHEDSTART');
            $table->string('SCHEDFINISH');
            $table->string('ACTSTART');
            $table->string('ACTFINISH');
            $table->string('SCHEDULE_LABOR');
            $table->string('FINISH_LABOR');
            $table->string('LAST_UPDATED_DATE');
            $table->string('TYPE_LAYANAN');
            $table->string('ISI_COMMENT');
            $table->string('TINDAK_LANJUT');
            $table->string('USER_ID_TL');
            $table->string('TL_DATE');
            $table->string('TANGGAL_PROSES');
            $table->string('TANGGAL_MANJA');
            $table->string('HIDE');
            $table->string('CATEGORY');
            $table->string('PROVIDER');
            $table->string('NPER');
            $table->string('AMCREW');
            $table->string('STATUS_WO');
            $table->string('STATUS_TASK');
            $table->string('CHANNEL');
            $table->string('GROUP_CHANNEL');
            $table->string('PRODUCT');
            $table->string('QC_EVIDENCE');
            $table->string('MSISDN_ORBIT');
            $table->string('SN_ORBIT');
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
        Schema::dropIfExists('dataps');
    }
}
