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
        Schema::create('nik_bayi_sementara', function (Blueprint $table) {
            $table->id();
            $table->string('nama_bayi', 100);
            $table->date('tanggal_pendaftaran');
            $table->string('nik_sementara', 16)->nullable();
            $table->string('nik_berlaku', 16)->nullable();
            $table->foreignId('nik_ibu')->nullable()->constrained('master_kependudukan', 'nik')->onDelete('set null');
            $table->foreignId('rt_id')->nullable()->constrained('rt')->onDelete('set null');
            $table->foreignId('rw_id')->nullable()->constrained('rw')->onDelete('set null');
            $table->string('dusun', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nik_bayi_sementara');
    }
};
