<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spv extends Model
{
    use HasFactory;

    public function agency()
    {
        return $this->belongsTo(Agency::class, 'agency_id','singkatan_agency');
    }

    public function salesforce()
    {
        return $this->hasMany(Salesforce::class, 'spv_id', 'kode_spv');
    }
}
