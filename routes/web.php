<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\agendakotaController;
use App\Http\Controllers\SesiController;
use App\Http\Middleware\UserAkses;
use Illuminate\Support\Facades\Route;
use Symfony\Component\VarDumper\Caster\AmqpCaster;

Route::middleware(['guest'])->group(function () {
    Route::get('/', [SesiController::class, 'index'])->name('login');
    Route::post('/login', [SesiController::class, 'login'])->name('login.post');
    Route::post('/register', [SesiController::class, 'register'])->name('register.post');
});

Route::get('/home', function () {
    return redirect('/metrolink');
});

Route::middleware(['auth'])->group(function () {
    // tampilan admin
    Route::get('/admin', [AdminController::class, 'admin'])->middleware('UserAkses:admin');
    Route::get('/admin', [AdminController::class, 'count'])->middleware('UserAkses:admin');
    Route::get('/admin/agenda_kota', [AdminController::class, 'AddAgendakota']);
    Route::get('/admin/agenda_kota', [AdminController::class, 'accAgendaKota']);
    Route::get('/admin/akun_admin', [AdminController::class, 'akun_admin']);
    Route::get('/admin/akun_admin', [AdminController::class, 'search_adminAkun']);
    Route::get('/admin/akun_admin/create', [AdminController::class, 'Admin_createAkun']);
    Route::post('/admin/akun_admin/store', [AdminController::class, 'Admin_storeAkun']);
    Route::get('/admin/akun_admin/edit/{id}', [AdminController::class, 'admin_editAkun']);
    Route::post('/admin/akun_admin/update/{id}', [AdminController::class, 'admin_updateAkun']);
    Route::delete('/admin/akun_admin/delete/{id}', [AdminController::class, 'akun_destroy']);

    // Tampilan user

    Route::get('/metrolink', [AdminController::class, 'user'])->middleware('UserAkses:user');
    Route::get('/metrolink/about_us', [AdminController::class, 'about_us']);
    Route::get('/metrolink/service', [AdminController::class, 'service']);
    Route::get('/metrolink/service/ajukan_kendala', [AdminController::class, 'formPengaduan']);
    Route::get('/metrolink/service/berikan_penilaian', [AdminController::class,'formPenilaian']);
    Route::get('/metrolink/galery', [AdminController::class, 'galery']);
    Route::get('/metrolink/agenda_kota', [AdminController::class, 'tampilkan']);
    Route::get('/metrolink/agenda_kota/create', [AdminController::class, 'createAgenda']);
    Route::get('/logout', [SesiController::class, 'logout']);
});

