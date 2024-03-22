@extends('dashboard.layouts.main')


@section('container')
  <div class="flex flex-col mt-8 container">
    <div class="overflow-x-hidden sm:-mx-6 lg:-mx-8">
      <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
        <a href="{{ route('pengaduan.create') }}" class="inline-block px-4 py-3 bg-sky-500 text-white">Buat pengaduan</a>
        <div class="overflow-hidden">
          <table class="min-w-full text-left font-light text-surface dark:text-white">
            <thead class="border-b border-neutral-200 font-medium dark:border-white/10">
              <tr>
                <th scope="col" class="px-6 py-4">No.</th>
                <th scope="col" class="px-6 py-4">Nama Pengaju</th>
                <th scope="col" class="px-6 py-4">Nomor Telepon</th>
                <th scope="col" class="px-6 py-4">Judul Pengajuan</th>
                <th scope="col" class="px-6 py-4">Isi Pengajuan</th>
                <th scope="col" class="px-6 py-4">Lokasi Kejadian</th>
                <th scope="col" class="px-6 py-4">Tanggal Kejadian</th>
                <th scope="col" class="px-6 py-4">Upload Photo</th>
                <th scope="col" class="px-6 py-4">Action</th>

              </tr>
            </thead>
            <tbody>
              @foreach ($pengaduan as $key => $aduan)
                <tr class="border-b border-neutral-200 dark:border-white/10">
                  <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $key + 1 }}</td>
                  <td class="whitespace-nowrap px-6 py-4">{{ $aduan->nama_pengaju }}</td>
                  <td class="whitespace-nowrap px-6 py-4">{{ $aduan->nomer_telpon }}</td>
                  <td class="whitespace-nowrap px-6 py-4">{{ $aduan->judul_pengajuan }}</td>
                  <td class="whitespace-nowrap px-6 py-4">{{ $aduan->isi_pengajuan }}</td>
                  <td class="whitespace-nowrap px-6 py-4">{{ $aduan->lokasi_kejadian }}</td>
                  <td class="whitespace-nowrap px-6 py-4">{{ $aduan->tanggal_kejadian }}</td>
                  <td class="whitespace-nowrap px-6 py-4">{{ $aduan->Upload_photo }}</td>
                  <td class="whitespace-nowrap px-6 py-4"><a href="{{route('pengaduan.edit',$aduan->id)}}">update</a>/<form method="post"action="{{route('pengaduan.destroy',$aduan->id)}}">@csrf @method("DELETE")<button type="submit">destroy</button></form></td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
