<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class obat extends Model
{
    use HasFactory;

    protected $fillable = ['kodeObat',
    'nama',
    'jenisObat',
    'tanggalMasuk',
    'pengirim',
    'penerima',
    'catatan'];
}
