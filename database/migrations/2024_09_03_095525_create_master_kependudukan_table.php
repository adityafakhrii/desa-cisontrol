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
        Schema::create('master_kependudukan', function (Blueprint $table) {
            $table->bigInteger('nik', 16)->primary();
            $table->foreignId('no_kk')->constrained('kartu_keluarga', 'no_kk')->onDelete('cascade');
            $table->string('nama', 100);
            $table->enum('shdk', ['Kepala Keluarga', 'Istri', 'Anak', 'Lainnya']);
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->string('tempat_lahir', 50);
            $table->date('tgl_lahir');
            $table->enum('gol_darah', ['A', 'B', 'AB', 'O'])->nullable();
            $table->enum('status_kawin', ['Belum Kawin', 'Kawin', 'Cerai Hidup', 'Cerai Mati']);
            $table->enum('agama', ['Islam','Katolik', 'Protestan','Hindu','Buddha','Konghucu']);
            $table->foreignId('pendidikan_id')->nullable()->constrained('pendidikan')->onDelete('set null');
            $table->foreignId('pekerjaan_id')->nullable()->constrained('pekerjaan')->onDelete('set null');
            $table->string('nama_ibu', 100);
            $table->string('nama_ayah', 100);
            $table->string('dusun', 50);
            //ambil nama RT dan RW
            $table->foreignId('rt_id')->nullable()->constrained('rt')->onDelete('set null');
            $table->foreignId('rw_id')->nullable()->constrained('rw')->onDelete('set null');
            $table->string('kode_pos', 5);
            $table->text('alamat');
            $table->string('desa_kelurahan', 50);
            // ambil nama kecamatan, kabkota, provinsi
            $table->foreignId('kecamatan_id')->nullable()->constrained('kecamatan')->onDelete('set null');
            $table->foreignId('kab_kota_id')->nullable()->constrained('kab_kota')->onDelete('set null');
            $table->foreignId('provinsi_id')->nullable()->constrained('provinsi')->onDelete('set null');
            $table->string('no_telp', 15)->nullable();
            $table->string('akta_kelahiran', 50)->nullable();
            $table->string('nomor_akta_kawin', 50)->nullable();
            $table->text('kelainan_fisik_mental')->nullable();
            $table->string('file_biodata', 255)->nullable();
            $table->string('nama_kepala_keluarga', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master_kependudukan');
    }
};
