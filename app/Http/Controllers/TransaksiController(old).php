<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;

class TransaksiController extends Controller
{
    public function masuk(){
    	return view('masuk',[
	    	"name" => "Mutiara",
	    	"title" => "Dompet Masuk",
	    	"data" => Transaksi::with(['transaksi_status','dompet','kategori'])->get()->where('status_id',1)
	    ]);
    }

    public function keluar(){
    	return view('keluar',[
	    	"name" => "Mutiara",
	    	"title" => "Dompet Keluar",
	    	"data" => Transaksi::with(['transaksi_status','dompet','kategori'])->get()->where('status_id',2)
	    ]);
    }
}
