<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class agenda_kota extends Model
{
    use HasFactory;

    protected $table = 'agenda_kotas';

    protected $fillable = [
        'Nama Penyelenggara',
        'Deskripsi Event',
        'Tanggal Pelaksanaan',
    ];
}
