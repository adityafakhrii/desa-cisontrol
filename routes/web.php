<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

Route::middleware('auth')->group(function () {
    // Semua rute di dalam grup ini akan memiliki middleware 'auth'
    Route::resource('/', Controllers\DashboardController::class);
    Route::post('logout', Controllers\LogoutController::class)->name('logout');

    Route::resource('master-kependudukan', Controllers\MasterKependudukanController::class);
    Route::resource('kartu-keluarga', Controllers\KartuKeluargaController::class);
    Route::resource('keterangan_kelahiran', Controllers\KeteranganKelahiranController::class);
    Route::resource('nik_bayi_sementara', Controllers\NikBayiSementaraController::class);
    Route::resource('permohonan_pindah', Controllers\PermohonanPindahController::class);
    Route::resource('pernyataan_perubahan_data', Controllers\PernyataanPerubahanDataController::class);
    Route::resource('rt', Controllers\RtController::class);
    Route::resource('rw', Controllers\RwController::class);
    Route::resource('kecamatan', Controllers\KecamatanController::class);
    Route::resource('kab_kota', Controllers\KabKotaController::class);
    Route::resource('provinsi', Controllers\ProvinsiController::class);
    Route::resource('pendidikan', Controllers\PendidikanController::class);
    Route::resource('pekerjaan', Controllers\PekerjaanController::class);
});

Route::middleware('guest')->group(function () {
    // Semua rute di dalam grup ini akan memiliki middleware 'guest'
    Route::get('login', [Controllers\LoginController::class, 'loginForm'])->name('login');
    Route::post('login', [Controllers\LoginController::class, 'authenticate']);
});


