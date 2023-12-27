<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelayanan extends Model
{
    use HasFactory;

    protected $fillable = ['nik','nama','tanggalPelayanan','jenisPelayanan','jenisPasien','diagnosa','bb','tb','catatanFisik','catatanDokter'];

    public function pasien(){
        return $this->belongsTo(pasien::class,'nik' ,'id');
    }
}
