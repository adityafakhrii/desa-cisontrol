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
        Schema::create('keterangan_kelahiran', function (Blueprint $table) {
            $table->id();
            $table->integer('no_urut');
            $table->date('tanggal');
            $table->foreignId('no_kk')->constrained('kartu_keluarga', 'no_kk')->onDelete('cascade');
            $table->string('nama_bayi', 100);
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->string('tempat_dilahirkan', 50);
            $table->string('tempat_lahir', 50);
            $table->time('jam_lahir');
            $table->string('jenis_kelahiran', 50);
            $table->integer('kelahiran_ke');
            $table->string('penolong_kelahiran', 100);
            $table->float('berat_bayi');
            $table->float('panjang_bayi');
            $table->foreignId('nik_ibu')->nullable()->constrained('master_kependudukan', 'nik')->onDelete('set null');
            $table->foreignId('nik_ayah')->nullable()->constrained('master_kependudukan', 'nik')->onDelete('set null');
            $table->foreignId('nik_pelapor')->nullable()->constrained('master_kependudukan', 'nik')->onDelete('set null');
            $table->foreignId('nik_saksi1')->nullable()->constrained('master_kependudukan', 'nik')->onDelete('set null');
            $table->foreignId('nik_saksi2')->nullable()->constrained('master_kependudukan', 'nik')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keterangan_kelahiran');
    }
};
