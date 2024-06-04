<?php

namespace App\Http\Controllers;


use App\Models\agenda_kota;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    function index(){
        echo "Admin";
        echo "<h1>". Auth::user()->name ."</h1>";
        echo "<a href='/logout'>Logout >></a>";
    }

    function admin(){
        return view("dashboardAdmin");
    }

    public function count()
    {
        $totalAgendaTersedia =  agenda_kota::count();
        $totalAdminAkun = User::where('tipe_user', 'admin')->count();
        $totalUserAkun = User::where('tipe_user', 'user')->count();

        return view('dashboardAdmin', compact( 'totalAgendaTersedia', 'totalAdminAkun','totalUserAkun' ));
    }

    // CRUD AKUN DI ADMIN =================================================================================================================

    function akun_admin(){
        $users = User::all();
        return view('akun_admin', compact('users'));
    }

    function Admin_createAkun(){
        return view('Create_adminAkun');
    }

    public function Admin_storeAkun(Request $request)
    {
    // Custom validation logic
    $validator = Validator::make($request->all(), [
        'username' => 'required|string|max:255|unique:users',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:6|confirmed',
    ]);

    // Check if validation fails
    if ($validator->fails()) {
        $messages = $validator->messages();
        if ($messages->has('username')) {
            $error = 'Username telah digunakan.';
        } elseif ($messages->has('email')) {
            $error = 'Email telah digunakan.';
        } else {
            $error = 'Periksa kembali data anda';
        }
        return redirect()->back()->withErrors($validator)->withInput()->with('error', $error);
    }

    try {
        // Create new user
        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect('/admin/akun_admin')->with('success', 'Register successfully');
    } catch (\Illuminate\Database\QueryException $e) {
        return redirect()->back()->with('error', 'An error occurred while registering');
    }
}

    // FITUR SEARCH ADMIN =================================================================================================================================
    public function search_adminAkun(Request $request)
    {
        $search = $request->input('search');

        $users = User::when($search, function ($query, $search) {
            return $query->where('username', 'like', "%{$search}%")
                        ->orWhere('email', 'like', "%{$search}%")
                        ->orWhere('tipe_user', 'like', "%{$search}%");
        })->get();

        return view('akun_admin', compact('users'));
    }

    public function search_agendakota(Request $request)
    {
        $search = $request->input('search');

        $agendaKotas = agenda_kota::when($search, function ($query, $search) {
        return $query->where('Nama_Penyelenggara', 'like', "%{$search}%")
                     ->orWhere('Nama_Event', 'like', "%{$search}%")
                     ->orWhere('kategori', 'like', "%{$search}%")
                     ->orWhere('Deskripsi_Event', 'like', "%{$search}%")
                     ->orWhere('Tanggal_Pelaksanaan', 'like', "%{$search}%");
        })->get();

        return view('admin_agendaKota', compact('agendaKotas'));
    }


    public function admin_editAkun($id)
    {
        $user = User::find($id);
        return view('edit_akunAdmin', compact('user'));
    }

    public function admin_updateAkun(Request $request, $id)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'tipe_user' => 'required|string|max:255',
        ]);

        $user = User::find($id);
        $user->username = $request->username;
        $user->email = $request->email;
        $user->tipe_user = $request->tipe_user;
        $user->save();

        return redirect('/admin/akun_admin')->with('success', 'User updated successfully');
    }

    public function akun_destroy($id)
    {
        $user = User::find($id);
        if ($user) {
            $user->delete();
            return redirect('/admin')->with('success', 'User deleted successfully');
        } else {
            return redirect('/admin')->with('error', 'User not found');
        }
    }

    // ============================================================================================================================================

    function AdminAgendakota(){
        $agendaKotas = agenda_kota::all();
        return view('admin_agendaKota', compact('agendaKotas'));
    }

    public function updateStatus(Request $request, $id)
    {
        $agendaKota = agenda_kota::findOrFail($id);
        $agendaKota->status = $request->status;
        $agendaKota->save();

        return redirect()->back()->with('success', 'Status berhasil diupdate');
    }

    function user(){
        return view("index");
    }

    function about_us(){
        return view("about_us");
    }

    function service(){
        return view("service");
    }

    function galery(){
        return view("galery");
    }

    public function tampilkanAgenda(){
        $agendaKotas = agenda_kota::where('status', 'acc')->get();
        return view('agenda_kota', compact('agendaKotas'));
    }

    public function createAgenda(){
        return view('create_agendaKota');
    }

    public function storeAgenda(){
        return view('create_agendaKota');
    }

    public function formPengaduan(){
        return view('form_pengaduan');
    }

    public function formPenilaian(){
        return view('penilaian');
    }



}
