<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi_Status extends Model
{
    use HasFactory;

    protected $fillable = ['nama'];

    public function transaksi(){
    	return $this->hasMany(transaksi::class, 'status_id');
    }
}
