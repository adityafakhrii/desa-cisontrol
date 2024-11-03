@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Tambah Data Kartu Keluarga</h4>
            <p class="card-description">
              Formulir untuk menambahkan data Kartu Keluarga baru
            </p>
            <form class="forms-sample" action="{{ route('kartu-keluarga.store') }}" method="POST">
              @csrf

              <div class="form-group">
                <label for="no_kk">Nomor KK</label>
                <input type="text" class="form-control" id="no_kk" name="no_kk" placeholder="Nomor KK" required>
              </div>

              <div class="form-group">
                <label for="no_urut">Nomor Urut</label>
                <input type="text" class="form-control" id="no_urut" name="no_urut" placeholder="Nomor Urut" required>
              </div>

              <div class="form-group">
                <label for="tanggal_pembuatan">Tanggal Pembuatan</label>
                <input type="date" class="form-control" id="tanggal_pembuatan" name="tanggal_pembuatan" required>
              </div>

              <div class="form-group">
                <label for="nik_kepala_keluarga">NIK Kepala Keluarga</label>
                <select class="form-control" id="nik_kepala_keluarga" name="nik_kepala_keluarga" required>
                  <option value="">Pilih NIK Kepala Keluarga</option>
                  @foreach($kepalaKeluarga as $kk)
                    <option value="{{ $kk->nik }}">{{ $kk->nik }} - {{ $kk->nama }}</option>
                  @endforeach
                </select>
              </div>

              <div class="form-group">
                <label for="jenis_permohonan">Jenis Permohonan</label>
                <select class="form-control" id="jenis_permohonan" name="jenis_permohonan" required>
                  <option value="Baru">Baru</option>
                  <option value="Perubahan">Perubahan</option>
                </select>
              </div>

              <div class="form-group">
                <label for="dusun">Dusun</label>
                <input type="text" class="form-control" id="dusun" name="dusun" placeholder="Dusun">
              </div>

              <div class="form-group">
                <label for="rt_id">RT</label>
                <select class="form-control" id="rt_id" name="rt_id" required>
                  <option value="">Pilih RT</option>
                  @foreach($rtOptions as $rt)
                    <option value="{{ $rt->id }}">{{ $rt->no_rt }}</option>
                  @endforeach
                </select>
              </div>

              <div class="form-group">
                <label for="rw_id">RW</label>
                <select class="form-control" id="rw_id" name="rw_id" required>
                  <option value="">Pilih RW</option>
                  @foreach($rwOptions as $rw)
                    <option value="{{ $rw->id }}">{{ $rw->no_rw }}</option>
                  @endforeach
                </select>
              </div>

              <div class="form-group">
                <label for="no_telp">No. Telepon</label>
                <input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="No. Telepon">
              </div>

              <div class="form-group">
                <label for="alasan_permohonan">Alasan Permohonan</label>
                <textarea class="form-control" id="alasan_permohonan" name="alasan_permohonan" rows="3" placeholder="Alasan Permohonan"></textarea>
              </div>

              <button type="submit" class="btn btn-primary mr-2">Submit</button>
              <a href="{{ route('kartu-keluarga.index') }}" class="btn btn-light">Batal</a>
            </form>
          </div>
        </div>
      </div>
</div>
@endsection
