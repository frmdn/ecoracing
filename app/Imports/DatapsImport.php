<?php

namespace App\Imports;

use App\Models\Pegawai;
use App\Models\Dataps;
use Maatwebsite\Excel\Concerns\ToModel;

class DatapsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Dataps([
            'NO' => $row[0],
            'ORDER_ID' => $row[1],
            'AREA' => $row[2],
            'REGIONAL' => $row[3],
            'BRANCH' => $row[4],
            'CLUSTERS' => $row[5],
            'STO' => $row[6],
            'EXTERN_ORDER_ID' => $row[7],
            'JENIS_PSB' => $row[8],
            'TYPE_TRANSAKSI' => $row[9],
            'FLAG_DEPOSIT' => $row[10],
            'STATUS_RESUME' => $row[11],
            'STATUS_MESSAGE' => $row[12],
            'KCONTACT' => $row[13],
            'ORDER_DATE' => $row[14],
            'NCLI' => $row[15],
            'NDEM' => $row[16],
            'SPEEDY' => $row[17],
            'POTS' => $row[18],
            'CUSTOMER_NAME' => $row[19],
            'NO_HP' => $row[20],
            'EMAIL' => $row[21],
            'INSTALL_ADDRESS' => $row[22],
            'CUSTOMER_ADDRESS' => $row[23],
            'CITY_NAME' => $row[24],
            'GPS_LATITUDE' => $row[25],
            'GPS_LONGITUDE' => $row[26],
            'PACKAGE_NAME' => $row[27],
            'LOC_ID' => $row[28],
            'DEVICE_ID' => $row[29],
            'AGENT_ID' => $row[30],
            'WFM_ID' => $row[31],
            'SCHEDSTART' => $row[32],
            'SCHEDFINISH' => $row[33],
            'ACTSTART' => $row[34],
            'ACTFINISH' => $row[35],
            'SCHEDULE_LABOR' => $row[36],
            'FINISH_LABOR' => $row[37],
            'LAST_UPDATED_DATE' => $row[38],
            'TYPE_LAYANAN' => $row[39],
            'ISI_COMMENT' => $row[40],
            'TINDAK_LANJUT' => $row[41],
            'USER_ID_TL' => $row[42],
            'TL_DATE' => $row[43],
            'TANGGAL_PROSES' => $row[44],
            'TANGGAL_MANJA' => $row[45],
            'HIDE' => $row[46],
            'CATEGORY' => $row[47],
            'PROVIDER' => $row[48],
            'NPER' => $row[49],
            'AMCREW' => $row[50],
            'STATUS_WO' => $row[51],
            'STATUS_TASK' => $row[52],
            'CHANNEL' => $row[53],
            'GROUP_CHANNEL' => $row[54],
            'PRODUCT' => $row[55],
            'QC_EVIDENCE' => $row[56],
            'MSISDN_ORBIT' => $row[57],
            'SN_ORBIT' => $row[58]
        ]);
    }
}
