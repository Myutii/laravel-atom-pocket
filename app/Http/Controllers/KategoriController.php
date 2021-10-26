<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Kategori_Status;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('kategori',[
            "name" => "Mutiara",
            "title" => "Kategori",
            "data" => Kategori::with(['kategori_status'])->filter(request(['kategori_status','search']))->paginate(10)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategori_create',[
            "name" => "Mutiara",
            "title" => "Tambah Data Kategori",
            "status" => Kategori_Status::all()
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
            'deskripsi'=>'max:100'
        ]);

        Kategori::create($validatedData);

        return redirect('kategori')->with('succsess', 'Tambah Kategori Berhasil!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function show(Kategori $kategori)
    {
        return view('kategori_detail',[
            "name" => "Mutiara",
            "title" => "Kategori",
            "data" => $kategori
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function edit(Kategori $kategori)
    {
        return view('kategori_update',[
            "name" => "Mutiara",
            "title" => "Ubah Data Kategori",
            "status" => Kategori_Status::all(),
            "kategori" => $kategori
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kategori $kategori)
    {
         $rules = [
            'nama'=>'required|min:5',
            'status_id'=>'required',
            'deskripsi'=>'max:100'
        ];

        $validatedData = $request->validate($rules);

        Kategori::where('id', $request->id)
                    ->update($validatedData);

        return redirect('kategori')->with('succsess', 'Ubah kategori Berhasil!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kategori $kategori)
    {
        //
    }
}
