<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jabatan_model;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $jabatan = Jabatan_model::all();
        return view('jabatan/indexx')->with(['jabatans'=>$jabatan]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('jabatan/jabatan_form');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       //
    //    $request->input('nama_jabatan');
    
       $tambahdata = [
        'nama_pengguna'=>$request->input('nama_pengguna'),
        'telepon'=>$request->input('telepon'),
        'nama_jabatan'=>$request->input('nama_jabatan')
    ];
       $jabatan = Jabatan_model::all();
       Jabatan_model::create($tambahdata); 
       return redirect('/jabatan')->with(['jabatans'=>$jabatan])->with('sukses', 'Data Berhasil Ditambahkan');
       
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
        $editjabatan = Jabatan_model::where('id_jabatan',$id)->first();
        return view ('jabatan/jabatan_form_edit')->with(['editjabatan'=>$editjabatan]);
        


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $tambahdata = [
            'nama_pengguna'=>$request->input('nama_pengguna'),
            'telepon'=>$request->input('telepon'),
            'nama_jabatan'=>$request->input('nama_jabatan')
        ];
        Jabatan_model::where('id_jabatan',$id)->update($tambahdata);     
        $jabatan = Jabatan_model::all();
        return redirect('/jabatan')->with(['jabatans'=>$jabatan])->with('sukses','Data berhasil di Edit');  

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Jabatan_model::where('id_jabatan',$id)->delete();
        $jabatan = Jabatan_model::all();
        return redirect('/jabatan')->with(['jabatans'=>$jabatan])->with('sukses','Data Berhasil Dihapus');
    }
}
