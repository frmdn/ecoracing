<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salesforce extends Model
{
    use HasFactory;

    public function spv() 
    {
        return $this->belongsTo(Spv::class, 'spv_id','kode_spv');
    }
}
