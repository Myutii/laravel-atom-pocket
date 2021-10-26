<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dompet extends Model
{
    use HasFactory;

    protected $fillable = ['nama','referensi','status_id','deskripsi'];

    public function dompet_status(){
    	return $this->belongsTo(Dompet_Status::class, 'status_id');
    }

    public function scopeFilter($query, array $filters){
    	$query->when($filters['dompet_status'] ?? false, function($query, $dompet_status){
    		return $query->whereHas('dompet_status', function($query)use($dompet_status){
    			$query->where('id', $dompet_status);
    		});
    	});
    	$query->when($filters['search'] ?? false, function($query, $search){
    		return $query->where('nama','like','%'.$search.'%')
    						->orWhere('deskripsi','like','%'.$search.'%')
    						->orWhere('referensi','like','%'.$search.'%');	
    	});	
    }
    
}
