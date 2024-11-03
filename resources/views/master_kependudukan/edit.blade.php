@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Edit Data Kependudukan</h4>
            <p class="card-description">
              Formulir untuk mengubah data penduduk
            </p>
            <form class="forms-sample" action="{{ route('master-kependudukan.update', $data->nik) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT') <!-- Untuk mengirimkan method PUT sesuai RESTful -->

              <div class="form-group">
                <label for="nik">NIK</label>
                <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK" value="{{ $data->nik }}" required>
              </div>

              <div class="form-group">
                <label for="no_kk">Nomor KK</label>
                <input type="text" class="form-control" id="no_kk" name="no_kk" placeholder="Nomor KK" value="{{ $data->no_kk }}">
              </div>

              <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" value="{{ $data->nama }}" required>
              </div>

              <div class="form-group">
                <label for="shdk">SHDK</label>
                <select class="form-control" id="shdk" name="shdk" required>
                  <option value="Kepala Keluarga" {{ $data->shdk == 'Kepala Keluarga' ? 'selected' : '' }}>Kepala Keluarga</option>
                  <option value="Istri" {{ $data->shdk == 'Istri' ? 'selected' : '' }}>Istri</option>
                  <option value="Anak" {{ $data->shdk == 'Anak' ? 'selected' : '' }}>Anak</option>
                  <option value="Lainnya" {{ $data->shdk == 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
                </select>
              </div>

              <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                  <option value="Laki-Laki" {{ $data->jenis_kelamin == 'Laki-Laki' ? 'selected' : '' }}>Laki-Laki</option>
                  <option value="Perempuan" {{ $data->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                </select>
              </div>

              <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" value="{{ $data->tempat_lahir }}" required>
              </div>

              <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ $data->tanggal_lahir }}" required>
              </div>

              <div class="form-group">
                <label for="gol_darah">Golongan Darah</label>
                <input type="text" class="form-control" id="gol_darah" name="gol_darah" placeholder="Golongan Darah" value="{{ $data->gol_darah }}">
              </div>

              <div class="form-group">
                <label for="status_kawin">Status Perkawinan</label>
                <select class="form-control" id="status_kawin" name="status_kawin" required>
                  <option value="Belum Kawin" {{ $data->status_kawin == 'Belum Kawin' ? 'selected' : '' }}>Belum Kawin</option>
                  <option value="Kawin" {{ $data->status_kawin == 'Kawin' ? 'selected' : '' }}>Kawin</option>
                  <option value="Cerai Hidup" {{ $data->status_kawin == 'Cerai Hidup' ? 'selected' : '' }}>Cerai Hidup</option>
                  <option value="Cerai Mati" {{ $data->status_kawin == 'Cerai Mati' ? 'selected' : '' }}>Cerai Mati</option>
                </select>
              </div>

              <div class="form-group">
                <label for="agama">Agama</label>
                <select class="form-control" id="agama" name="agama" required>
                  <option value="Islam" {{ $data->agama == 'Islam' ? 'selected' : '' }}>Islam</option>
                  <option value="Kristen" {{ $data->agama == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                  <option value="Katholik" {{ $data->agama == 'Katholik' ? 'selected' : '' }}>Katholik</option>
                  <option value="Hindu" {{ $data->agama == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                  <option value="Budha" {{ $data->agama == 'Budha' ? 'selected' : '' }}>Budha</option>
                  <option value="Konghucu" {{ $data->agama == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
                </select>
              </div>

              <div class="form-group">
                <label for="pendidikan_id">Pendidikan</label>
                <input type="text" class="form-control" id="pendidikan_id" name="pendidikan_id" placeholder="Pendidikan" value="{{ $data->pendidikan_id }}">
              </div>

              <div class="form-group">
                <label for="pekerjaan_id">Pekerjaan</label>
                <input type="text" class="form-control" id="pekerjaan_id" name="pekerjaan_id" placeholder="Pekerjaan" value="{{ $data->pekerjaan_id }}">
              </div>

              <div class="form-group">
                <label for="nama_ibu">Nama Ibu</label>
                <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" placeholder="Nama Ibu" value="{{ $data->nama_ibu }}">
              </div>

              <div class="form-group">
                <label for="nama_ayah">Nama Ayah</label>
                <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" placeholder="Nama Ayah" value="{{ $data->nama_ayah }}">
              </div>

              <div class="form-group">
                <label for="dusun">Dusun</label>
                <input type="text" class="form-control" id="dusun" name="dusun" placeholder="Dusun" value="{{ $data->dusun }}">
              </div>

              <div class="form-group">
                <label for="rt_id">RT</label>
                <input type="text" class="form-control" id="rt_id" name="rt_id" placeholder="RT" value="{{ $data->rt_id }}">
              </div>

              <div class="form-group">
                <label for="rw_id">RW</label>
                <input type="text" class="form-control" id="rw_id" name="rw_id" placeholder="RW" value="{{ $data->rw_id }}">
              </div>

              <div class="form-group">
                <label for="kode_pos">Kode Pos</label>
                <input type="text" class="form-control" id="kode_pos" name="kode_pos" placeholder="Kode Pos" value="{{ $data->kode_pos }}">
              </div>

              <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="Alamat">{{ $data->alamat }}</textarea>
              </div>

              <div class="form-group">
                <label for="desa_kelurahan">Desa/Kelurahan</label>
                <input type="text" class="form-control" id="desa_kelurahan" name="desa_kelurahan" placeholder="Desa/Kelurahan" value="{{ $data->desa_kelurahan }}">
              </div>

              <div class="form-group">
                <label for="kecamatan_id">Kecamatan</label>
                <input type="text" class="form-control" id="kecamatan_id" name="kecamatan_id" placeholder="Kecamatan" value="{{ $data->kecamatan_id }}">
              </div>

              <div class="form-group">
                <label for="kab_kota_id">Kabupaten/Kota</label>
                <input type="text" class="form-control" id="kab_kota_id" name="kab_kota_id" placeholder="Kabupaten/Kota" value="{{ $data->kab_kota_id }}">
              </div>

              <div class="form-group">
                <label for="provinsi_id">Provinsi</label>
                <input type="text" class="form-control" id="provinsi_id" name="provinsi_id" placeholder="Provinsi" value="{{ $data->provinsi_id }}">
              </div>

              <button type="submit" class="btn btn-primary me-2">Submit</button>
              <a href="{{ route('master-kependudukan.index') }}" class="btn btn-light">Cancel</a>
            </form>
          </div>
        </div>
    </div>
</div>
@endsection
