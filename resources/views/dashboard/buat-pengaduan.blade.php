@extends('dashboard.layouts.main')


@section('container')
  <div class="container px-16 mt-8">
    <h1 class="text-2xl">Tambah Data Pengaduan</h1>
    <form action="{{ route('pengaduan.store') }}" method="POST" class="flex flex-col">
      @csrf
      <div class="mt-4">
        <label for="nama_pengaju" class="block">Nama Pengaju</label>
        <input type="text" id="nama_pengaju" name="nama_pengaju" class="border border-neutral-500">
      </div>
      <div class="mt-4">
        <label for="nomer_telpon" class="block">No. Telepon</label>
        <input type="text" id="nomer_telpon" name="nomer_telpon" class="border border-neutral-500">
      </div>
      <div class="mt-4">
        <label for="judul_pengajuan" class="block">Judul Pengajuan</label>
        <input type="text" id="judul_pengajuan" name="judul_pengajuan" class="border border-neutral-500">
      </div>
      <div class="mt-4">
        <label for="isi_pengajuan" class="block">Isi Pengajuan</label>
        <input type="text" id="isi_pengajuan" name="isi_pengajuan" class="border border-neutral-500">
      </div>
      <div class="mt-4">
        <label for="lokasi_kejadian" class="block">Lokasi Kejadian</label>
        <input type="text" id="lokasi_kejadian" name="lokasi_kejadian" class="border border-neutral-500">
      </div>
      <div class="mt-4">
        <label for="tanggal_kejadian" class="block">Tanggal Kejadian</label>
        <input type="date" id="tanggal_kejadian" name="tanggal_kejadian" class="border border-neutral-500">
      </div>
      <input type="hidden" name="Upload_photo" value="test.jpg">
      <div class="mt-4">
        <button type="submit" class="px-4 py-3 text-white bg-gray-800">Tambah cik</button>
      </div>
    </form>
  </div>
@endsection
