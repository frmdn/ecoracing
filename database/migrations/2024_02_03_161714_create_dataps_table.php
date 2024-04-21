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
            $table->string('AREA')->nullable();
            $table->string('REGIONAL')->nullable();
            $table->string('BRANCH')->nullable();
            $table->string('CLUSTERS')->nullable();
            $table->string('STO')->nullable();
            $table->string('EXTERN_ORDER_ID')->nullable();
            $table->string('JENIS_PSB')->nullable();
            $table->string('TYPE_TRANSAKSI')->nullable();
            $table->string('FLAG_DEPOSIT')->nullable();
            $table->string('STATUS_RESUME')->nullable();
            $table->string('STATUS_MESSAGE')->nullable();
            $table->string('KCONTACT')->nullable();
            $table->string('ORDER_DATE')->nullable();
            $table->string('NCLI')->nullable();
            $table->string('NDEM')->nullable();
            $table->string('SPEEDY')->nullable();
            $table->string('POTS')->nullable();
            $table->string('CUSTOMER_NAME')->nullable();
            $table->string('NO_HP')->nullable();
            $table->string('EMAIL')->nullable();
            $table->longText('INSTALL_ADDRESS')->nullable();
            $table->longText('CUSTOMER_ADDRESS')->nullable();
            $table->string('CITY_NAME')->nullable();
            $table->string('GPS_LATITUDE')->nullable();
            $table->string('GPS_LONGITUDE')->nullable();
            $table->longText('PACKAGE_NAME')->nullable();
            $table->string('LOC_ID')->nullable();
            $table->string('DEVICE_ID')->nullable();
            $table->string('AGENT_ID')->nullable();
            $table->string('WFM_ID')->nullable();
            $table->string('SCHEDSTART')->nullable();
            $table->string('SCHEDFINISH')->nullable();
            $table->string('ACTSTART')->nullable();
            $table->string('ACTFINISH')->nullable();
            $table->string('SCHEDULE_LABOR')->nullable();
            $table->string('FINISH_LABOR')->nullable();
            $table->string('LAST_UPDATED_DATE')->nullable();
            $table->string('TYPE_LAYANAN')->nullable();
            $table->string('ISI_COMMENT')->nullable();
            $table->string('TINDAK_LANJUT')->nullable();
            $table->string('USER_ID_TL')->nullable();
            $table->string('TL_DATE')->nullable();
            $table->string('TANGGAL_PROSES')->nullable();
            $table->string('TANGGAL_MANJA')->nullable();
            $table->string('HIDE')->nullable();
            $table->string('CATEGORY')->nullable();
            $table->string('PROVIDER')->nullable();
            $table->string('NPER')->nullable();
            $table->string('AMCREW')->nullable();
            $table->string('STATUS_WO')->nullable();
            $table->string('STATUS_TASK')->nullable();
            $table->string('CHANNEL')->nullable();
            $table->string('GROUP_CHANNEL')->nullable();
            $table->string('PRODUCT')->nullable();
            $table->longText('QC_EVIDENCE')->nullable();
            $table->string('MSISDN_ORBIT')->nullable();
            $table->string('SN_ORBIT')->nullable();
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
