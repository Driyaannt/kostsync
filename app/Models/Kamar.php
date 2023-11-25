<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;
    protected $table = 'kamar';

    protected $fillable = [
        'id_jenis',
        'nama_kamar',
        'status',
        'id_user'
    ];

    // relasi dengan tabel jenis_kamar

    public function jenis_kamar()
    {
        return $this->belongsTo(JenisKamar::class, 'id_jenis', 'id');
    }

    public function pengaduan()
    {
        return $this->hasMany(Pengaduan::class, 'id_kamar', 'id');
    }

    
    // Relasi dengan tabel user
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
