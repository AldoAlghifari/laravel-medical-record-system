<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{
    use HasFactory;

    protected $fillable = ['nama','tanggalPembayaran','metodeBayar','nomorKartu','totalTagihan','jumlahDibayar','sisaTagihan'];

    public function pelayanan(){
        return $this->belongsTo(pelayanan::class,'nama' ,'id');
    }
}
