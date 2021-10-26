<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = ['tanggal', 'dompet_id', 'kode', 'nilai','kategori_id', 'status_id','deskripsi'];

    public function transaksi_status(){
    	return $this->belongsTo(Transaksi_Status::class, 'status_id');
    }

    public function dompet(){
    	return $this->belongsTo(Dompet::class, 'dompet_id');
    }

    public function kategori(){
    	return $this->belongsTo(Kategori::class, 'kategori_id');
    }
}
