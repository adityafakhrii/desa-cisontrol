<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RT extends Model
{
    use HasFactory;

    // Definisikan tabel yang digunakan jika nama tabel tidak sesuai dengan nama model
    protected $table = 'rt';

    // Kolom yang dapat diisi (fillable) melalui form atau mass assignment
    protected $fillable = ['no_rt', 'nik_rt'];

    // Relasi ke tabel master_kependudukan
    public function masterKependudukan()
    {
        return $this->belongsTo(MasterKependudukan::class, 'nik_rt', 'id');
    }
}
