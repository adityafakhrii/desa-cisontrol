@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <div class="d-xl-flex justify-content-between align-items-center mb-4 pb-2">
                <div class="text-dark">
                  <h2 class="mb-1 font-weight-bold">Master Kependudukan</h2>
                </div>
                <div class="statistics d-lg-flex text-dark mt-3 mt-sm-0">
                    <a href="{{ route('master-kependudukan.create') }}" class="btn btn-primary"><i class="mdi mdi-account-plus"></i> Tambah Data</a>
                </div>
              </div>
            <div class="row">
              <div class="table-sorter-wrapper col-lg-12 table-responsive">
                <table id="sortable-table-2" class="table table-striped">
                    <thead>
                      <tr>
                        <th>Aksi</th>
                        <th class="sortStyle">No<i class="mdi mdi-chevron-down"></i></th>
                        <th class="sortStyle">NIK<i class="mdi mdi-chevron-down"></i></th>
                        <th class="sortStyle">No KK<i class="mdi mdi-chevron-down"></i></th>
                        <th class="sortStyle">Nama<i class="mdi mdi-chevron-down"></i></th>
                        <th class="sortStyle">SHDK<i class="mdi mdi-chevron-down"></i></th>
                        <th class="sortStyle">Jenis Kelamin<i class="mdi mdi-chevron-down"></i></th>
                        <th class="sortStyle">Tempat Lahir<i class="mdi mdi-chevron-down"></i></th>
                        <th class="sortStyle">Tanggal Lahir<i class="mdi mdi-chevron-down"></i></th>
                        <th class="sortStyle">Golongan Darah<i class="mdi mdi-chevron-down"></i></th>
                        <th class="sortStyle">Status Kawin<i class="mdi mdi-chevron-down"></i></th>
                        <th class="sortStyle">Agama<i class="mdi mdi-chevron-down"></i></th>
                        <th class="sortStyle">Pendidikan ID<i class="mdi mdi-chevron-down"></i></th>
                        <th class="sortStyle">Pekerjaan ID<i class="mdi mdi-chevron-down"></i></th>
                        <th class="sortStyle">Nama Ibu<i class="mdi mdi-chevron-down"></i></th>
                        <th class="sortStyle">Nama Ayah<i class="mdi mdi-chevron-down"></i></th>
                        <th class="sortStyle">Dusun<i class="mdi mdi-chevron-down"></i></th>
                        <th class="sortStyle">RT ID<i class="mdi mdi-chevron-down"></i></th>
                        <th class="sortStyle">RW ID<i class="mdi mdi-chevron-down"></i></th>
                        <th class="sortStyle">Kode Pos<i class="mdi mdi-chevron-down"></i></th>
                        <th class="sortStyle">Alamat<i class="mdi mdi-chevron-down"></i></th>
                        <th class="sortStyle">Desa/Kelurahan<i class="mdi mdi-chevron-down"></i></th>
                        <th class="sortStyle">Kecamatan ID<i class="mdi mdi-chevron-down"></i></th>
                        <th class="sortStyle">Kab/Kota ID<i class="mdi mdi-chevron-down"></i></th>
                        <th class="sortStyle">Provinsi ID<i class="mdi mdi-chevron-down"></i></th>
                        <th class="sortStyle">No Telp<i class="mdi mdi-chevron-down"></i></th>
                        <th class="sortStyle">Akta Kelahiran<i class="mdi mdi-chevron-down"></i></th>
                        <th class="sortStyle">Nomor Akta Kawin<i class="mdi mdi-chevron-down"></i></th>
                        <th class="sortStyle">Kelainan Fisik/Mental<i class="mdi mdi-chevron-down"></i></th>
                        <th class="sortStyle">File Biodata<i class="mdi mdi-chevron-down"></i></th>
                        <th class="sortStyle">Nama Kepala Keluarga<i class="mdi mdi-chevron-down"></i></th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($dataKependudukan as $key => $data)
                            <tr>
                                <td>
                                    <!-- Tombol Edit dengan Route Parameter -->
                                    <a href="{{ route('master-kependudukan.edit', $data->nik) }}" class="btn btn-inverse-warning btn-fw btn-sm">
                                      <i class="mdi mdi-pencil"></i>
                                    </a>
                                    <!-- Tombol Hapus dengan Route Parameter -->
                                    <form action="{{ route('master-kependudukan.destroy', $data->nik) }}" method="POST" style="display:inline;">
                                      @csrf
                                      @method('DELETE')
                                      <button type="submit" class="btn btn-inverse-danger btn-fw btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                        <i class="mdi mdi-delete-forever"></i>
                                      </button>
                                    </form>
                                  </td>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $data->nik }}</td>
                                <td>{{ $data->no_kk }}</td>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->shdk }}</td>
                                <td>{{ $data->jenis_kelamin }}</td>
                                <td>{{ $data->tempat_lahir }}</td>
                                <td>{{ $data->tanggal_lahir }}</td>
                                <td>{{ $data->golongan_darah }}</td>
                                <td>{{ $data->status_kawin }}</td>
                                <td>{{ $data->agama }}</td>
                                <td>{{ $data->pendidikan_id }}</td>
                                <td>{{ $data->pekerjaan_id }}</td>
                                <td>{{ $data->nama_ibu }}</td>
                                <td>{{ $data->nama_ayah }}</td>
                                <td>{{ $data->dusun }}</td>
                                <td>{{ $data->rt_id }}</td>
                                <td>{{ $data->rw_id }}</td>
                                <td>{{ $data->kode_pos }}</td>
                                <td>{{ $data->alamat }}</td>
                                <td>{{ $data->desa_kelurahan }}</td>
                                <td>{{ $data->kecamatan_id }}</td>
                                <td>{{ $data->kab_kota_id }}</td>
                                <td>{{ $data->provinsi_id }}</td>
                                <td>{{ $data->no_telp }}</td>
                                <td>{{ $data->akta_kelahiran }}</td>
                                <td>{{ $data->nomor_akta_kawin }}</td>
                                <td>{{ $data->kelainan_fisik_mental }}</td>
                                <td>{{ $data->file_biodata }}</td>
                                <td>{{ $data->nama_kepala_keluarga }}</td>
                            </tr>
                        @endforeach
                    </tbody>

                  </table>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>


@endsection
