<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paket_model;

class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $paket = Paket_model::all();
        return view('paket/index')->with(['pakets'=>$paket]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('paket/paket_form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $tambahdata = [
            'nama_paket'=>$request->input('nama_paket'),
            'harga_paket'=>$request->input('harga_paket'),
            'jenis_paket'=>$request->input('jenis_paket')
        ];
           $paket = Paket_model::all();
           Paket_model::create($tambahdata); 
           return redirect('/paket')->with(['pakets'=>$paket], 'sukses', 'Data Berhasil Ditambahkan');
           
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $editpaket = Paket_model::where('id_paket',$id)->first();
        return view ('paket/paket_form_edit')->with(['editpaket'=>$editpaket]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $tambahdata = [
            'nama_paket'=>$request->input('nama_paket'),
            'harga_paket'=>$request->input('harga_paket'),
            'jenis_paket'=>$request->input('jenis_paket')
        ];
        Paket_model::where('id_paket',$id)->update($tambahdata);     
        $paket = Paket_model::all();
        return redirect('/paket')->with(['pakets'=>$paket])->with('sukses','Data berhasil di Edit');  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Paket_model::where('id_paket',$id)->delete();
        $paket =Paket_model::all();
        return redirect('/paket')->with(['pakets'=>$paket])->with('sukses','Data Berhasil Dihapus');
    }
}
