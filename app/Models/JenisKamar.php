<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisKamar extends Model
{
    use HasFactory;
    protected $table = 'jenis_kamar';

    protected $fillable = [
        'id_fasilitas',
        'id_cabang',
        'nama_jenis',
        'deskripsi',
        'harga',
        'gambar',
    ];

    // relasi dengan tabel fasilitas
    public function fasilitas()
    {
        return $this->belongsTo(Fasilitas::class, 'id_fasilitas', 'id');
    }

    // relasi dengan tabel cabang
    public function cabang()
    {
        return $this->belongsTo(Cabang::class, 'id_cabang', 'id');
    }

    // relasi dengan tabel kamar
    public function kamar()
    {
        return $this->hasMany(Kamar::class, 'id_jenis', 'id');
    }
}
