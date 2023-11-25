<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Cabang extends Model
{
    use HasFactory;

    protected $table = 'cabang';

    protected $fillable = [
        'nama_cabang',
        'deskripsi',
        'lokasi_cabang',
    ];

    // relasi dengan tabel jenis_kamar
    public function jenis_kamar()
    {
        return $this->hasMany(JenisKamar::class, 'id_cabang', 'id');
    }

    public function kamar()
    {
        return $this->hasMany(Kamar::class, 'id_cabang');
    }


    public function user()
    {
        return $this->hasMany(User::class, 'id_cabang', 'id');
    }
}
