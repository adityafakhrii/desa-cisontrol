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
                    <a href="{{ route('kartu-keluarga.create') }}" class="btn btn-primary"><i class="mdi mdi-account-plus"></i> Tambah Data</a>
                </div>
              </div>
            <div class="row">
              <div class="table-sorter-wrapper col-lg-12 table-responsive">
                <table id="sortable-table-2" class="table table-striped">
                    <thead>
                      <tr>
                        <th>Aksi</th>
                        <th class="sortStyle">No Urut<i class="mdi mdi-chevron-down"></i></th>
                        <th class="sortStyle">No KK<i class="mdi mdi-chevron-down"></i></th>
                        <th class="sortStyle">Tgl Pembuatan<i class="mdi mdi-chevron-down"></i></th>
                        <th class="sortStyle">Kepala Keluarga<i class="mdi mdi-chevron-down"></i></th>
                        <th class="sortStyle">Dusun<i class="mdi mdi-chevron-down"></i></th>
                        <th class="sortStyle">RT<i class="mdi mdi-chevron-down"></i></th>
                        <th class="sortStyle">RW<i class="mdi mdi-chevron-down"></i></th>
                        <th class="sortStyle">No Telp<i class="mdi mdi-chevron-down"></i></th>
                        <th class="sortStyle">Alasan Permohonan<i class="mdi mdi-chevron-down"></i></th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($dataKependudukan as $data)
                            <tr>
                                <td>
                                    <a href="{{ route('kartu-keluarga.edit', $data->no_kk) }}" class="btn btn-inverse-warning btn-fw btn-sm">
                                      <i class="mdi mdi-pencil"></i>
                                    </a>
                                    <form action="{{ route('kartu-keluarga.destroy', $data->no_kk) }}" method="POST" style="display:inline;">
                                      @csrf
                                      @method('DELETE')
                                      <button type="submit" class="btn btn-inverse-danger btn-fw btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                        <i class="mdi mdi-delete-forever"></i>
                                      </button>
                                    </form>
                                </td>
                                <td>{{ $data->no_urut }}</td>
                                <td>{{ $data->no_kk }}</td>
                                <td>{{ $data->tanggal_pembuatan }}</td>
                                <td>{{ $data->kepalaKeluarga->nama ?? '-' }}</td>
                                <td>{{ $data->dusun }}</td>
                                <td>{{ $data->rt->no_rt ?? '-' }}</td>
                                <td>{{ $data->rw->no_rw ?? '-' }}</td>
                                <td>{{ $data->no_telp ?? '-' }}</td>
                                <td>{{ $data->alasan_permohonan ?? '-' }}</td>
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
