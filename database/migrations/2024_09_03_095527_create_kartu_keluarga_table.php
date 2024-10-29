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
        Schema::create('kartu_keluarga', function (Blueprint $table) {
            $table->bigInteger('no_kk', 16)->primary();
            $table->integer('no_urut');
            $table->date('tanggal_pembuatan');
            $table->foreignId('nik_kepala_keluarga')->constrained('master_kependudukan', 'nik')->onDelete('cascade');
            $table->string('jenis_permohonan', 50);
            $table->string('dusun', 50);
            $table->foreignId('rt_id')->nullable()->constrained('rt')->onDelete('set null');
            $table->foreignId('rw_id')->nullable()->constrained('rw')->onDelete('set null');
            $table->string('no_telp', 15)->nullable();
            $table->text('alasan_permohonan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kartu_keluarga');
    }
};
