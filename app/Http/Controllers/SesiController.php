<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SesiController extends Controller
{
    public function index()
    {
        return view('login'); // Tampilkan halaman login dan register
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        try {
            $user = new User();

            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();

            return back()->with('success', 'Register successfully');
        } catch (\Illuminate\Database\QueryException $e) {
            // Catch exception when email already exists in the database
            return back()->with('errorEmail', 'Email yang anda masukkan, sudah pernah didaftarkan');
        }
    }

    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($infologin)) {
            if (Auth::user()->tipe_user == 'admin') {
                return redirect('admin');
            } elseif (Auth::user()->tipe_user == 'user') {
                return redirect('metrolink');
            }
        } else {
            return redirect()->back()->withErrors('Username and password do not match.')->withInput();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
