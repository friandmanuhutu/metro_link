<?php

namespace App\Http\Controllers;

use App\Models\Penilaian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PenilaianController extends Controller
{
    public function store(Request $request)
    {
        // Validasi request
        $request->validate([
            'komentar' => 'required|string|max:255',
        ]);

        // Simpan komentar ke dalam database
        Penilaian::create([
            'username' => auth()->user()->username, // Ambil username dari user yang sedang login
            'email' => auth()->user()->email, // Ambil email dari user yang sedang login
            'komentar' => $request->komentar,
        ]);

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Komentar berhasil disimpan!');
    }
}
