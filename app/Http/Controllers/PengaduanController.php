<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PengaduanController extends Controller
{
    public function store(Request $request)
    {
        // Validasi data input
        $validatedData = $request->validate([
            'nama_pengaju' => 'required',
            'nomer_telpon' => 'required',
            'judul_pengajuan' => 'required',
            'isi_pengajuan' => 'required',
            'lokasi_kejadian' => 'required',
            'tanggal_kejadian	' => 'required',
            'Upload_photo' => 'required',
            // Tambahkan validasi lain sesuai kebutuhan
        ]);

        // Simpan data ke database
        Pengaduan::create($validatedData);

        // Redirect ke halaman sukses atau tampilkan pesan sukses
        return redirect()->route('sukses');
    }
}