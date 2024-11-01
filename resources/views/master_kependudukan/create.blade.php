@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Tambah Data Kependudukan</h4>
            <p class="card-description">
              Formulir untuk menambahkan data penduduk baru
            </p>
            <form class="forms-sample" action="{{ route('master-kependudukan.store') }}" method="POST" enctype="multipart/form-data">
              @csrf

              <div class="form-group">
                <label for="nik">NIK</label>
                <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK" required>
              </div>

              <div class="form-group">
                <label for="no_kk">Nomor KK</label>
                <input type="text" class="form-control" id="no_kk" name="no_kk" placeholder="Nomor KK" required>
              </div>

              <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" required>
              </div>

              <div class="form-group">
                <label for="shdk">SHDK</label>
                <select class="form-control" id="shdk" name="shdk" required>
                  <option value="Kepala Keluarga">Kepala Keluarga</option>
                  <option value="Istri">Istri</option>
                  <option value="Anak">Anak</option>
                  <option value="Lainnya">Lainnya</option>
                </select>
              </div>

              <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                  <option value="Laki-Laki">Laki-Laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
              </div>

              <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" required>
              </div>

              <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
              </div>

              <div class="form-group">
                <label for="gol_darah">Golongan Darah</label>
                <input type="text" class="form-control" id="gol_darah" name="gol_darah" placeholder="Golongan Darah">
              </div>

              <div class="form-group">
                <label for="status_kawin">Status Perkawinan</label>
                <select class="form-control" id="status_kawin" name="status_kawin" required>
                  <option value="Belum Kawin">Belum Kawin</option>
                  <option value="Kawin">Kawin</option>
                  <option value="Cerai Hidup">Cerai Hidup</option>
                  <option value="Cerai Mati">Cerai Mati</option>
                </select>
              </div>

              <div class="form-group">
                <label for="agama">Agama</label>
                <select class="form-control" id="agama" name="agama" required>
                  <option value="Islam">Islam</option>
                  <option value="Kristen">Kristen</option>
                  <option value="Katholik">Katholik</option>
                  <option value="Hindu">Hindu</option>
                  <option value="Budha">Budha</option>
                  <option value="Konghucu">Konghucu</option>
                </select>
              </div>

              <div class="form-group">
                <label for="pendidikan_id">Pendidikan</label>
                <input type="text" class="form-control" id="pendidikan_id" name="pendidikan_id" placeholder="Pendidikan">
              </div>

              <div class="form-group">
                <label for="pekerjaan_id">Pekerjaan</label>
                <input type="text" class="form-control" id="pekerjaan_id" name="pekerjaan_id" placeholder="Pekerjaan">
              </div>

              <div class="form-group">
                <label for="nama_ibu">Nama Ibu</label>
                <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" placeholder="Nama Ibu">
              </div>

              <div class="form-group">
                <label for="nama_ayah">Nama Ayah</label>
                <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" placeholder="Nama Ayah">
              </div>

              <div class="form-group">
                <label for="dusun">Dusun</label>
                <input type="text" class="form-control" id="dusun" name="dusun" placeholder="Dusun">
              </div>

              <div class="form-group">
                <label for="rt_id">RT</label>
                <input type="text" class="form-control" id="rt_id" name="rt_id" placeholder="RT">
              </div>

              <div class="form-group">
                <label for="rw_id">RW</label>
                <input type="text" class="form-control" id="rw_id" name="rw_id" placeholder="RW">
              </div>

              <div class="form-group">
                <label for="kode_pos">Kode Pos</label>
                <input type="text" class="form-control" id="kode_pos" name="kode_pos" placeholder="Kode Pos">
              </div>

              <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="Alamat"></textarea>
              </div>

              <div class="form-group">
                <label for="desa_kelurahan">Desa/Kelurahan</label>
                <input type="text" class="form-control" id="desa_kelurahan" name="desa_kelurahan" placeholder="Desa/Kelurahan">
              </div>

              <div class="form-group">
                <label for="kecamatan_id">Kecamatan</label>
                <input type="text" class="form-control" id="kecamatan_id" name="kecamatan_id" placeholder="Kecamatan">
              </div>

              <div class="form-group">
                <label for="kab_kota_id">Kabupaten/Kota</label>
                <input type="text" class="form-control" id="kab_kota_id" name="kab_kota_id" placeholder="Kabupaten/Kota">
              </div>

              <div class="form-group">
                <label for="provinsi_id">Provinsi</label>
                <input type="text" class="form-control" id="provinsi_id" name="provinsi_id" placeholder="Provinsi">
              </div>

              <div class="form-group">
                <label for="no_telp">No. Telepon</label>
                <input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="No. Telepon">
              </div>

              <div class="form-group">
                <label for="akta_kelahiran">Akta Kelahiran</label>
                <input type="text" class="form-control" id="akta_kelahiran" name="akta_kelahiran" placeholder="Akta Kelahiran">
              </div>

              <div class="form-group">
                <label for="nomor_akta_kawin">Nomor Akta Kawin</label>
                <input type="text" class="form-control" id="nomor_akta_kawin" name="nomor_akta_kawin" placeholder="Nomor Akta Kawin">
              </div>

              <div class="form-group">
                <label for="kelainan_fisik_mental">Kelainan Fisik/Mental</label>
                <input type="text" class="form-control" id="kelainan_fisik_mental" name="kelainan_fisik_mental" placeholder="Kelainan Fisik/Mental">
              </div>

              <div class="form-group">
                <label for="file_biodata">Upload Biodata</label>
                <input type="file" name="file_biodata" class="file-upload-default">
                <div class="input-group col-xs-12">
                  <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload file biodata">
                  <span class="input-group-append">
                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                  </span>
                </div>
              </div>

              <div class="form-group">
                <label for="nama_kepala_keluarga">Nama Kepala Keluarga</label>
                <input type="text" class="form-control" id="nama_kepala_keluarga" name="nama_kepala_keluarga" placeholder="Nama Kepala Keluarga">
              </div>

              <button type="submit" class="btn btn-primary mr-2">Submit</button>
              <a href="{{ route('master-kependudukan.index') }}" class="btn btn-light">Cancel</a>
            </form>
          </div>
        </div>
      </div>
</div>
@endsection
