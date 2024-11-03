<?php

namespace App\Http\Controllers;

use App\Models\KartuKeluarga;
use App\Models\MasterKependudukan;
use App\Models\RT;
use App\Models\RW;
use Illuminate\Http\Request;

class KartuKeluargaController extends Controller
{
    public function index()
    {
        $dataKependudukan = KartuKeluarga::with(['kepalaKeluarga', 'rt', 'rw'])->get();
        return view('kartu_keluarga.index', compact('dataKependudukan'));
    }

    public function create()
{
    // Fetch all 'MasterKependudukan' records to populate the 'nik_kepala_keluarga' select input
    $kepalaKeluarga = MasterKependudukan::all(['nik', 'nama']);

    // Fetch all 'RT' and 'RW' records for 'rt_id' and 'rw_id' select inputs
    $rtOptions = RT::all(['id', 'no_rt']);
    $rwOptions = RW::all(['id', 'no_rw']);

    return view('kartu_keluarga.create', compact('kepalaKeluarga', 'rtOptions', 'rwOptions'));
}

    public function store(Request $request)
    {
        // $request->validate([
        //     'no_kk' => 'required|unique:kartu_keluarga,no_kk|max:16',
        //     'no_urut' => 'required|integer',
        //     'tanggal_pembuatan' => 'required|date',
        //     'nik_kepala_keluarga' => 'required|exists:master_kependudukan,nik',
        //     'jenis_permohonan' => 'required|string|max:50',
        //     'dusun' => 'required|string|max:50',
        //     'rt_id' => 'nullable|exists:rt,id',
        //     'rw_id' => 'nullable|exists:rw,id',
        //     'no_telp' => 'nullable|string|max:15',
        //     'alasan_permohonan' => 'nullable|string',
        // ]);

        KartuKeluarga::create($request->all());
        return redirect()->route('kartu-keluarga.index')->with('success', 'Data Kartu Keluarga berhasil ditambahkan');
    }

    public function edit($no_kk)
    {
        $kartuKeluarga = KartuKeluarga::findOrFail($no_kk);
        $kepalaKeluarga = MasterKependudukan::all(['nik', 'nama']);
        $rtOptions = RT::all(['id', 'no_rt']);
        $rwOptions = RW::all(['id', 'no_rw']);
        return view('kartu_keluarga.edit', compact('kartuKeluarga','kepalaKeluarga', 'rtOptions', 'rwOptions'));
    }

    public function update(Request $request, $no_kk)
    {
        // $request->validate([
        //     'no_urut' => 'required|integer',
        //     'tanggal_pembuatan' => 'required|date',
        //     'nik_kepala_keluarga' => 'required|exists:master_kependudukan,nik',
        //     'jenis_permohonan' => 'required|string|max:50',
        //     'dusun' => 'required|string|max:50',
        //     'rt_id' => 'nullable|exists:rt,id',
        //     'rw_id' => 'nullable|exists:rw,id',
        //     'no_telp' => 'nullable|string|max:15',
        //     'alasan_permohonan' => 'nullable|string',
        // ]);

        $kartuKeluarga = KartuKeluarga::findOrFail($no_kk);
        $kartuKeluarga->update($request->all());
        return redirect()->route('kartu-keluarga.index')->with('success', 'Data Kartu Keluarga berhasil diperbarui');
    }

    public function destroy($no_kk)
    {
        $kartuKeluarga = KartuKeluarga::findOrFail($no_kk);
        $kartuKeluarga->delete();
        return redirect()->route('kartu-keluarga.index')->with('success', 'Data Kartu Keluarga berhasil dihapus');
    }
}
