<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penilaian extends Model
{
    use HasFactory;

    protected $table = 'penilaian'; // Tentukan nama tabel yang sesuai

    protected $fillable = [
        'rating',
        'keterangan',
    ];
}
