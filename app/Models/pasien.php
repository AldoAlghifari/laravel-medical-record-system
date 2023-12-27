<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pasien extends Model
{
    use HasFactory;

    protected $fillable = ['nik', 'nama', 'tanggalLahir','umur','jenisKelamin','golDarah','namaOrtu','alamat','noHp','noKk'];
}
