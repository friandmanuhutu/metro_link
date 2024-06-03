<?php

namespace App\Http\Controllers;

use App\Models\AccAgendaKota;
use App\Models\agenda_kota;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        $totalPengajuanAgenda = AccAgendaKota::count();
        $totalAgendaTersedia =  agenda_kota::count();
        $totalAdminAkun = User::where('tipe_user', 'admin')->count();

        return view('dashboardAdmin', compact( 'totalPengajuanAgenda', 'totalAgendaTersedia', 'totalAdminAkun'));
    }

    function akun_admin(){
        $users = User::where('tipe_user', 'admin')->get();
        return view('akun_admin', compact('users'));
    }

    function AddAgendakota(){
        return view("admin_agendaKota");
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

    public function tampilkan(){
        $agendaKotas = agenda_kota::all();
        return view('agenda_kota', compact('agendaKotas'));
    }

    public function AccAgendaKota(){
        $AccagendaKotas = AccAgendaKota::all();
        return view('admin_agendakota', compact('AccagendaKotas'));
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
