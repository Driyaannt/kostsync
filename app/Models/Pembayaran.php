<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $table = 'pembayaran';

    protected $fillable = [
        'jenis_pembayaran',
        'status',
    ];

    // relasi dengan tabel pesanan
    public function pesanan()
    {
        return $this->hasOne(Pesanan::class, 'id_pembayaran', 'id');
    }
}
