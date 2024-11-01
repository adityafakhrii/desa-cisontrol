<?php

namespace App\Http\Controllers;

use App\Models\MasterKependudukan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MasterKependudukanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataKependudukan = MasterKependudukan::all();
        return view('master_kependudukan.master_kependudukan', compact('dataKependudukan'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('master_kependudukan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'nik' => 'required|unique:master_kependudukan|max:16',
        //     'no_kk' => 'required|max:16',
        //     'nama' => 'required|string|max:255',
        //     'shdk' => 'required|string',
        //     'jenis_kelamin' => 'required|string',
        //     'tempat_lahir' => 'required|string|max:255',
        //     'tanggal_lahir' => 'required|date',
        //     'gol_darah' => 'nullable|string|max:3',
        //     'status_kawin' => 'required|string',
        //     'agama' => 'required|string',
        //     'pendidikan_id' => 'nullable|integer',
        //     'pekerjaan_id' => 'nullable|integer',
        //     'nama_ibu' => 'nullable|string|max:255',
        //     'nama_ayah' => 'nullable|string|max:255',
        //     'dusun' => 'nullable|string|max:255',
        //     'rt_id' => 'nullable|integer',
        //     'rw_id' => 'nullable|integer',
        //     'kode_pos' => 'nullable|string|max:5',
        //     'alamat' => 'nullable|string|max:255',
        //     'desa_kelurahan' => 'nullable|string|max:255',
        //     'kecamatan_id' => 'nullable|integer',
        //     'kab_kota_id' => 'nullable|integer',
        //     'provinsi_id' => 'nullable|integer',
        //     'no_telp' => 'nullable|string|max:15',
        //     'akta_kelahiran' => 'nullable|string|max:20',
        //     'nomor_akta_kawin' => 'nullable|string|max:20',
        //     'kelainan_fisik_mental' => 'nullable|string|max:255',
        //     'file_biodata' => 'nullable|file|mimes:pdf,doc,docx',
        //     'nama_kepala_keluarga' => 'nullable|string|max:255',
        // ]);

        // Upload file if exists
        $fileBiodata = null;
        if ($request->hasFile('file_biodata')) {
            $fileBiodata = $request->file('file_biodata')->store('biodata_files', 'public');
        }

        MasterKependudukan::create([
            'nik' => $request->nik,
            'no_kk' => $request->no_kk,
            'nama' => $request->nama,
            'shdk' => $request->shdk,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'gol_darah' => $request->gol_darah,
            'status_kawin' => $request->status_kawin,
            'agama' => $request->agama,
            'pendidikan_id' => $request->pendidikan_id,
            'pekerjaan_id' => $request->pekerjaan_id,
            'nama_ibu' => $request->nama_ibu,
            'nama_ayah' => $request->nama_ayah,
            'dusun' => $request->dusun,
            'rt_id' => $request->rt_id,
            'rw_id' => $request->rw_id,
            'kode_pos' => $request->kode_pos,
            'alamat' => $request->alamat,
            'desa_kelurahan' => $request->desa_kelurahan,
            'kecamatan_id' => $request->kecamatan_id,
            'kab_kota_id' => $request->kab_kota_id,
            'provinsi_id' => $request->provinsi_id,
            'no_telp' => $request->no_telp,
            'akta_kelahiran' => $request->akta_kelahiran,
            'nomor_akta_kawin' => $request->nomor_akta_kawin,
            'kelainan_fisik_mental' => $request->kelainan_fisik_mental,
            'file_biodata' => $fileBiodata,
            'nama_kepala_keluarga' => $request->nama_kepala_keluarga,
        ]);

        return redirect()->route('master-kependudukan.index')->with('success', 'Data kependudukan berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kependudukan = MasterKependudukan::findOrFail($id);
        return view('master_kependudukan.show', compact('kependudukan'));
    }

    public function edit($id)
    {
        $kependudukan = MasterKependudukan::findOrFail($id);
        return view('master_kependudukan.edit', compact('kependudukan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $kependudukan = MasterKependudukan::findOrFail($id);

        $request->validate([
            'nik' => 'required|max:16|unique:kependudukan,nik,' . $id,
            'no_kk' => 'required|max:16',
            'nama' => 'required|string|max:255',
            // Validation rules are the same as in store() method
            // ...
        ]);

        // Upload file if exists
        if ($request->hasFile('file_biodata')) {
            if ($kependudukan->file_biodata) {
                Storage::delete($kependudukan->file_biodata);
            }
            $fileBiodata = $request->file('file_biodata')->store('biodata_files', 'public');
            $kependudukan->file_biodata = $fileBiodata;
        }

        $kependudukan->update($request->all());

        return redirect()->route('master-kependudukan.index')->with('success', 'Data kependudukan berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $kependudukan = MasterKependudukan::findOrFail($id);
        if ($kependudukan->file_biodata) {
            Storage::delete($kependudukan->file_biodata);
        }
        $kependudukan->delete();

        return redirect()->route('master-kependudukan.index')->with('success', 'Data kependudukan berhasil dihapus.');
    }
}
