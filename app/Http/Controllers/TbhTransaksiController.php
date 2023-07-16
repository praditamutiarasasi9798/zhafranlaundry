<?php

namespace App\Http\Controllers;

use App\Models\Customer_model;
use App\Models\TbhTransaksi_model;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\TemplateProcessor;


class TbhTransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('/tambahtransaksi/index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $customer=Customer_model::all();
        return view('/tambahtransaksi/transaksi_form', ['dataCustomer' => $customer]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function document($id)
    {
        $monthNames = array(
            1 => 'Januari',
            2 => 'Februari',
            3 => 'Maret',
            4 => 'April',
            5 => 'Mei',
            6 => 'Juni',
            7 => 'Juli',
            8 => 'Agustus',
            9 => 'September',
            10 => 'Oktober',
            11 => 'November',
            12 => 'Desember'
        );

        $today = date('d') . ' ' . $monthNames[date('n')] . ' ' . date('Y');
        $dataMahasiswa = TbhTransaksi_model::all();
        $dataMagang = TbhTransaksi_model::with('mahasiswa', 'tempatMagang')->where('id_mahasiswa', $dataMahasiswa->id_mahasiswa)
            ->orderBy('id_magang', 'desc')->first();

        $templateProcessor = new TemplateProcessor('file-word/template-surat.docx');
        $templateProcessor->setValue('id_magang', $dataMagang->id_magang);
        $templateProcessor->setValue('tanggal_cetak', $today);
        $templateProcessor->setValue('nama_perusahaan', $dataMagang->tempatMagang->nama_perusahaan);
        $templateProcessor->setValue('alamat', $dataMagang->tempatMagang->alamat);
        $templateProcessor->setValue('nim_mhs', $dataMahasiswa->nim);
        $templateProcessor->setValue('ipk_mhs', $dataMahasiswa->ipk);
        $filename = 'INVOICE TRANSAKSI LAUNDRY' ;
        $templateProcessor->saveAs($filename . '.docx');
        return response()->download($filename . '.docx')->deleteFileAfterSend(true);
    }
}
