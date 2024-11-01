<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterKependudukan extends Model
{
    use HasFactory;

    protected $table = 'master_kependudukan';

    // Menentukan primary key custom (nik) sebagai integer
    protected $primaryKey = 'nik';

    // Primary key yang bukan auto-increment
    public $incrementing = false;

    // Tipe data primary key
    protected $keyType = 'int';

    protected $fillable = [
        'nik',
        'no_kk',
        'nama',
        'shdk',
        'jenis_kelamin',
        'tempat_lahir',
        'tgl_lahir',
        'gol_darah',
        'status_kawin',
        'agama',
        'pendidikan_id',
        'pekerjaan_id',
        'nama_ibu',
        'nama_ayah',
        'dusun',
        'rt_id',
        'rw_id',
        'kode_pos',
        'alamat',
        'desa_kelurahan',
        'kecamatan_id',
        'kab_kota_id',
        'provinsi_id',
        'no_telp',
        'akta_kelahiran',
        'nomor_akta_kawin',
        'kelainan_fisik_mental',
        'file_biodata',
        'nama_kepala_keluarga'
    ];

    // Relasi ke tabel KartuKeluarga (Foreign key: no_kk)
    public function kartuKeluarga()
    {
        return $this->belongsTo(KartuKeluarga::class, 'no_kk');
    }

    // Relasi ke tabel Pendidikan (Foreign key: pendidikan_id)
    public function pendidikan()
    {
        return $this->belongsTo(Pendidikan::class, 'pendidikan_id');
    }

    // Relasi ke tabel Pekerjaan (Foreign key: pekerjaan_id)
    public function pekerjaan()
    {
        return $this->belongsTo(Pekerjaan::class, 'pekerjaan_id');
    }

    // Relasi ke tabel Rt (Foreign key: rt_id)
    public function rt()
    {
        return $this->belongsTo(Rt::class, 'rt_id');
    }

    // Relasi ke tabel Rw (Foreign key: rw_id)
    public function rw()
    {
        return $this->belongsTo(Rw::class, 'rw_id');
    }

    // Relasi ke tabel Kecamatan (Foreign key: kecamatan_id)
    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class, 'kecamatan_id');
    }

    // Relasi ke tabel KabKota (Foreign key: kab_kota_id)
    public function kabKota()
    {
        return $this->belongsTo(KabKota::class, 'kab_kota_id');
    }

    // Relasi ke tabel Provinsi (Foreign key: provinsi_id)
    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class, 'provinsi_id');
    }
}
