<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccAgendaKota extends Model
{
    use HasFactory;

    protected $table = 'acc_agenda_kota';

    protected $fillable = [
        'username',
        'Nama_Penyelenggara',
        'Nama_Event',
        'kategori',
        'Deskripsi_Event',
        'Tanggal_Pelaksanaan',
    ];
}
