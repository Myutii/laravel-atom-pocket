<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $fillable = ['nama','status_id','deskripsi'];

    public function kategori_status(){
    	return $this->belongsTo(Kategori_Status::class, 'status_id');
    }

    public function scopeFilter($query, array $filters){
    	$query->when($filters['kategori_status'] ?? false, function($query, $kategori_status){
    		return $query->whereHas('kategori_status', function($query)use($kategori_status){
    			$query->where('id', $kategori_status);
    		});
    	});
    	$query->when($filters['search'] ?? false, function($query, $search){
    		return $query->where('nama','like','%'.$search.'%')
    						->orWhere('deskripsi','like','%'.$search.'%');	
    	});

    	
    }
}
