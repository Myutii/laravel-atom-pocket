<?php

namespace App\Http\Controllers;

use App\Models\Dompet;
use App\Models\Dompet_Status;
use Illuminate\Http\Request;


class DompetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dompet',[
            "name" => "Mutiara",
            "title" => "Dompet",
            "data" => Dompet::with('dompet_status')->filter(request(['search','dompet_status']))->paginate(10)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dompet_create',[
            "name" => "Mutiara",
            "title" => "Tambah Data Dompet",
            "status" => Dompet_Status::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama'=>'required|min:5',
            'status_id'=>'required',
            'referensi'=>'',
            'deskripsi'=>'max:100'
        ]);

        Dompet::create($validatedData);

        return redirect('dompet')->with('succsess', 'Tambah Dompet Berhasil!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dompet  $dompet
     * @return \Illuminate\Http\Response
     */
    public function show(Dompet $dompet)
    {
        return view('dompet_detail',[
            "name" => "Mutiara",
            "title" => "Dompet Detail",
            "data" => $dompet
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dompet  $dompet
     * @return \Illuminate\Http\Response
     */
    public function edit(Dompet $dompet)
    {
        return view('dompet_update',[
            "name" => "Mutiara",
            "title" => "Ubah Data Dompet",
            "status" => Dompet_Status::all(),
            "dompet" => $dompet
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dompet  $dompet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dompet $dompet)
    {
        $rules = [
            'nama'=>'required|min:5',
            'status_id'=>'required',
            'referensi'=>'',
            'deskripsi'=>'max:100'
        ];

        $validatedData = $request->validate($rules);

        Dompet::where('id', $request->id)
                    ->update($validatedData);

        return redirect('dompet')->with('succsess', 'Ubah Dompet Berhasil!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dompet  $dompet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dompet $dompet)
    {
        //
    }
}
