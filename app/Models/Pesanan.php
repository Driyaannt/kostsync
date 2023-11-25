<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $table = 'pesanan';

    protected $fillable = [
        'id_user',
        'id_pembayaran',
        'status',
    ];

    // relasi dengan tabel user
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    public function pembayaran()
    {
        return $this->belongsTo(Pesanan::class, 'id_pembaayran', 'id');
    }
}
