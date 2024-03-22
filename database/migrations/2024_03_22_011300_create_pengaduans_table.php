<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pengaduans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pengaju');
            $table->string('nomer_telpon');
            $table->string('judul_pengajuan');
            $table->string('isi_pengajuan');
            $table->string('lokasi_kejadian');
            $table->date('tanggal_kejadian');
            $table->string('Upload_photo');
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaduans');
    }
};