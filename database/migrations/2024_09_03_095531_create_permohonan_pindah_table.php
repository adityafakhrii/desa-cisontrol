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
        Schema::create('permohonan_pindah', function (Blueprint $table) {
            $table->id();
            $table->integer('nomor_urut');
            $table->date('tanggal');
            $table->foreignId('nomor_kk')->constrained('kartu_keluarga', 'no_kk')->onDelete('cascade');
            $table->string('nama_kepala_keluarga', 100);
            $table->string('dusun_lama', 50);
            $table->foreignId('rt_lama_id')->nullable()->constrained('rt')->onDelete('set null');
            $table->foreignId('rw_lama_id')->nullable()->constrained('rw')->onDelete('set null');
            $table->string('phone_lama', 15);
            $table->enum('alasan_pindah', ['Pekerjaan', 'Pendidikan', 'Keamanan', 'Kesehatan', 'Perumahan', 'Keluarga', 'Lainnya']);
            $table->text('alasan_pindah_lainnya')->nullable();
            $table->text('alamat_baru');
            $table->foreignId('rt_baru_id')->nullable()->constrained('rt')->onDelete('set null');
            $table->foreignId('rw_baru_id')->nullable()->constrained('rw')->onDelete('set null');
            $table->string('desa_baru', 50);
            $table->foreignId('kecamatan_baru_id')->nullable()->constrained('kecamatan')->onDelete('set null');
            $table->foreignId('kab_kota_baru_id')->nullable()->constrained('kab_kota')->onDelete('set null');
            $table->foreignId('provinsi_baru_id')->nullable()->constrained('provinsi')->onDelete('set null');
            $table->string('kode_pos_baru', 5);
            $table->string('phone_baru', 15);
            $table->enum('klasifikasi_pindah', ['Dalam Satu Desa/Kelurahan', 'Antar Desa/Kelurahan', 'Antar Kecamatan', 'Antar Kab/Kota', 'Antar Provinsi']);
            $table->enum('jenis_pindah', ['Kepala Keluarga', 'Kepala Keluarga dan Seluruh Anggota Keluarga', 'Kepala Keluarga dan Sebagian Anggota Keluarga', 'Anggota Keluarga']);
            $table->enum('status_no_kk_tidak_pindah', ['Numpang KK', 'Membuat KK Baru', 'Tidak Ada Anggota Keluarga yang Ditinggal', 'Nomor KK Tetap']);
            $table->enum('status_no_kk_pindah', ['Numpang KK', 'Membuat KK Baru', 'Nama Kepala Keluarga dan No KK Tetap']);
            $table->date('tanggal_pindah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permohonan_pindah');
    }
};
