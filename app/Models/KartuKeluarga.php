<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KartuKeluarga extends Model
{
    use HasFactory;

    protected $table = 'kartu_keluarga';
    protected $primaryKey = 'no_kk';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'no_kk',
        'no_urut',
        'tanggal_pembuatan',
        'nik_kepala_keluarga',
        'jenis_permohonan',
        'dusun',
        'rt_id',
        'rw_id',
        'no_telp',
        'alasan_permohonan'
    ];

    // Relasi ke master kependudukan sebagai kepala keluarga
    public function kepalaKeluarga()
    {
        return $this->belongsTo(MasterKependudukan::class, 'nik_kepala_keluarga', 'nik');
    }

    // Relasi ke RT
    public function rt()
    {
        return $this->belongsTo(RT::class, 'rt_id');
    }

    // Relasi ke RW
    public function rw()
    {
        return $this->belongsTo(RW::class, 'rw_id');
    }
}
