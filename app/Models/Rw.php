<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RW extends Model
{
    use HasFactory;

    protected $table = 'rw';

    protected $fillable = ['no_rw', 'nik_rw'];

    // Relasi ke tabel master_kependudukan
    public function masterKependudukan()
    {
        return $this->belongsTo(MasterKependudukan::class, 'nik_rw', 'id');
    }
}
