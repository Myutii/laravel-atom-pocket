<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function index(){
    	return view('kategori',[
	    	"name" => "Mutiara",
	    	"title" => "Kategori",
	    	"data" => Kategori::with(['kategori_status'])->filter(request(['kategori_status','search']))->get()
	    ]);
    }

    public function show(Kategori $kategori){
    	return view('kategori_detail',[
	    	"name" => "Mutiara",
	    	"title" => "Kategori",
	    	"data" => $kategori
	    ]);
    }
}
