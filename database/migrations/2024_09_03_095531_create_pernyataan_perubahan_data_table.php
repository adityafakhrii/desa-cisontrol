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
        Schema::create('pernyataan_perubahan_data', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->foreignId('no_kk')->constrained('kartu_keluarga', 'no_kk')->onDelete('cascade');
            $table->string('nama_lengkap', 100);
            $table->string('nik', 16);
            $table->string('dusun', 50);
            $table->foreignId('rt_id')->nullable()->constrained('rt')->onDelete('set null');
            $table->foreignId('rw_id')->nullable()->constrained('rw')->onDelete('set null');
            $table->string('nama', 100);
            $table->string('nama_semula', 100)->nullable();
            $table->text('berdasarkan_nama')->nullable();
            $table->string('nomor_nama')->nullable();
            $table->date('tanggal_nama')->nullable();
            $table->string('agama', 50);
            $table->string('agama_semula', 50)->nullable();
            $table->text('berdasarkan_agama')->nullable();
            $table->string('nomor_agama')->nullable();
            $table->date('tanggal_agama')->nullable();
            $table->enum('kelamin', ['Laki-laki', 'Perempuan']);
            $table->enum('kelamin_semula', ['Laki-laki', 'Perempuan'])->nullable();
            $table->text('berdasarkan_kelamin')->nullable();
            $table->string('nomor_kelamin')->nullable();
            $table->date('tanggal_kelamin')->nullable();
            $table->string('kewarganegaraan', 50);
            $table->string('kewarganegaraan_semula', 50)->nullable();
            $table->text('berdasarkan_kewarganegaraan')->nullable();
            $table->string('nomor_kewarganegaraan')->nullable();
            $table->date('tanggal_kewarganegaraan')->nullable();
            $table->text('tempat_tinggal');
            $table->text('tempat_tinggal_semula')->nullable();
            $table->foreignId('rt_semula_id')->nullable()->constrained('rt')->onDelete('set null');
            $table->foreignId('rw_semula_id')->nullable()->constrained('rw')->onDelete('set null');
            $table->string('desa_semula', 50)->nullable()->nullable();
            $table->foreignId('kecamatan_semula_id')->nullable()->constrained('kecamatan')->onDelete('set null');
            $table->foreignId('kab_kota_semula_id')->nullable()->constrained('kab_kota')->onDelete('set null');
            $table->foreignId('provinsi_semula_id')->nullable()->constrained('provinsi')->onDelete('set null');
            $table->text('berdasarkan_tempat')->nullable();
            $table->string('nomor_tempat_tinggal')->nullable();
            $table->date('tanggal_tempat_tinggal')->nullable();
            $table->string('tempat_lahir', 50);
            $table->string('tempat_lahir_semula', 50)->nullable();
            $table->text('berdasarkan_tempat_lahir')->nullable();
            $table->string('nomor_tempat_lahir')->nullable();
            $table->date('tanggal_tempat_lahir')->nullable();
            $table->date('tanggal_lahir');
            $table->date('tanggal_lahir_semula')->nullable();
            $table->text('berdasarkan_tanggal_lahir')->nullable();
            $table->string('nomor_tanggal_lahir')->nullable();
            $table->date('tanggal_tanggal_lahir')->nullable();
            $table->enum('status_perkawinan', ['Belum Kawin', 'Kawin', 'Cerai Hidup', 'Cerai Mati']);
            $table->enum('status_perkawinan_semula', ['Belum Kawin', 'Kawin', 'Cerai Hidup', 'Cerai Mati'])->nullable();
            $table->text('berdasarkan_status_perkawinan')->nullable();
            $table->string('nomor_status_perkawinan')->nullable();
            $table->date('tanggal_status_perkawinan')->nullable();
            $table->enum('shdk', ['Kepala Keluarga', 'Istri', 'Anak', 'Lainnya']);
            $table->enum('shdk_semula', ['Kepala Keluarga', 'Istri', 'Anak', 'Lainnya'])->nullable();
            $table->text('berdasarkan_shdk')->nullable();
            $table->string('nomor_shdk')->nullable();
            $table->date('tanggal_shdk')->nullable();
            $table->foreignId('pendidikan_id')->nullable()->constrained('pendidikan')->onDelete('set null');
            $table->foreignId('pekerjaan_id')->nullable()->constrained('pekerjaan')->onDelete('set null');
            $table->text('berdasarkan_pendidikan')->nullable();
            $table->string('nomor_pendidikan')->nullable();
            $table->date('tanggal_pendidikan')->nullable();
            $table->text('berdasarkan_pekerjaan')->nullable();
            $table->string('nomor_pekerjaan')->nullable();
            $table->date('tanggal_pekerjaan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pernyataan_perubahan_data');
    }
};
