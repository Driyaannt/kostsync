<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    use HasFactory;

    protected $table = 'fasilitas';

    protected $fillable = [
        'nama_fasilitas',
    ];

    // relasi dengan tabel jenis_kamar
    public function jenis_kamar()
    {
        return $this->hasMany(JenisKamar::class, 'id_fasilitas', 'id');
    }
}
