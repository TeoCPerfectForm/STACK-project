<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Throwable;

class DashboardPengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengaduan = Pengaduan::all();
        return view('dashboard.pengaduan')->with('pengaduan', $pengaduan);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.buat-pengaduan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data input
        try {
            $validated = $request->validate([
                'nama_pengaju' => 'required',
                'nomer_telpon' => 'required',
                'judul_pengajuan' => 'required',
                'isi_pengajuan' => 'required',
                'lokasi_kejadian' => 'required',
                'tanggal_kejadian' => 'required',
                'Upload_photo' => '',
            ]);

            $pengaduan = new Pengaduan();
            $pengaduan->create($validated);

            return redirect()->back();
        } catch (Throwable $e) {
            dd($e);
        }

        // // Simpan data ke database
        // Pengaduan::create($validatedData);
    }

    /**
     * Display the specified resource.
     */
    public function show(Pengaduan $pengaduan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengaduan $pengaduan)
    {
        return view("dashboard.edit-pengaduan",["pengaduan"=>$pengaduan]);
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pengaduan $pengaduan)
    {
        $pengaduan->update([
            "nama_pengaju"=>$request->nama_pengaju,
            "nomer_telpon"=>$request->nomer_telpon,
            "judul_pengajuan"=>$request->judul_pengajuan,
            "isi_pengajuan"=>$request->isi_pengajuan,
            "lokasi_kejadian"=>$request->lokasi_kejadian,
            "tanggal_kejadian"=>$request->tanggal_kejadian,
        ]);
        return redirect(route('pengaduan.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengaduan $pengaduan)
    {
        $pengaduan->delete(

        );
        return redirect(route('pengaduan.index'));
    }
}