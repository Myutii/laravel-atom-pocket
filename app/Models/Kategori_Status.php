<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori_Status extends Model
{
    use HasFactory;

    protected $fillable = ['nama'];

    public function kategori(){
    	return $this->hasMany(Kategori::class, 'status_id');
    }
}
