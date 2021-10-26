<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dompet;

class DompetController extends Controller
{
    public function index(){
    	return view('dompet',[
	    	"name" => "Mutiara",
	    	"title" => "Dompet",
	    	"data" => Dompet::with('dompet_status')->filter(request(['search','dompet_status']))->paginate(1)->withQueryString()
	    ]);
    }

    public function show(Dompet $dompet){
    	return view('dompet_detail',[
	    	"name" => "Mutiara",
	    	"title" => "Dompet Detail",
	    	"data" => $dompet
	    ]);
    }
}
