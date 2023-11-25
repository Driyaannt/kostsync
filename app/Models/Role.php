<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    
    protected $table = "role";

    protected $fillable = [
        "name_role",
    ];

    // relasi dengan tabel user
    public function user() {
        return $this->hasMany(User::class, 'id_role', 'id');
    }
}
