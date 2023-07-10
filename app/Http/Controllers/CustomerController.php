<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer_model;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $customer = Customer_model::all();
        return view('customer/index')->with(['customers'=>$customer]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('customer/customer_form');        

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $tambahdata = [
            'nama_customer'=>$request->input('nama_customer'),
            'telepon'=>$request->input('telepon'),
            'jk'=>$request->input('jk'),
            'alamat'=>$request->input('alamat'),
        ];
           $customer = Customer_model::all();
           Customer_model::create($tambahdata); 
           return redirect('/customer')->with(['customers'=>$customer], 'sukses', 'Data Berhasil Ditambahkan');
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
        $editcustomer = Customer_model::where('id_customer',$id)->first();
        return view ('customer/customer_form_edit')->with(['editcustomer'=>$editcustomer]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $tambahdata = [
            'nama_customer'=>$request->input('nama_customer'),
            'telepon'=>$request->input('telepon'),
            'jk'=>$request->input('jk'),
            'alamat'=>$request->input('alamat'),
        ];
        Customer_model::where('id_customer',$id)->update($tambahdata);     
        $customer = Customer_model::all();
        return redirect('/customer')->with(['customers'=>$customer])->with('sukses','Data berhasil di Edit');  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Customer_model::where('id_customer',$id)->delete();
        $customer =Customer_model::all();
        return redirect('/customer')->with(['customers'=>$customer])->with('sukses','Data Berhasil Dihapus');
    }
}
