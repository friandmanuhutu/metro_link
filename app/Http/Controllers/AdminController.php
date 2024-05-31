<?php

namespace App\Http\Controllers;

use App\Models\agenda_kota;
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
        echo "admin Metrolink";
        echo "<h1>". Auth::user()->name ."</h1>";
        echo "<a href='/logout'>Logout >></a>";
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

    public function createAgenda(){
        return view('create_agendaKota');
    }

    public function storeAgenda(){
        return view('create_agendaKota');
    }



}
