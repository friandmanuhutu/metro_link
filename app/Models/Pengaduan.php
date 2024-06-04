<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'email',
        'telepon',
        'judul_pengaduan',
        'deskripsi_pengaduan',
        'alamat',
        'foto'
    ];
}
