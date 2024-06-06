<?php

namespace App\Http\Controllers;

use App\Models\Penilaian;
use Illuminate\Http\Request;

class PenilaianController extends Controller
{
    public function PenilaianStore(Request $request)
    {
        // Validasi data masukan
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'keterangan' => 'nullable|string|max:255',
        ]);

        // Simpan data ke database
        Penilaian::create([
            'rating' => $request->rating,
            'keterangan' => $request->keterangan,
        ]);

        // Redirect atau berikan respons sesuai kebutuhan aplikasi Anda
        return redirect('/metrolink/service')->with('success', 'Terima kasih atas penilaian Anda!');
    }
}
