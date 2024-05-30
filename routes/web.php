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
    Route::get('/admin', [AdminController::class, 'admin'])->middleware('UserAkses:admin');
    Route::get('/metrolink', [AdminController::class, 'user'])->middleware('UserAkses:user');
    Route::get('/metrolink/about_us', [AdminController::class, 'about_us']);
    Route::get('/metrolink/service', [AdminController::class, 'service']);
    Route::get('/metrolink/galery', [AdminController::class, 'galery']);
    Route::get('/metrolink/agenda_kota', [AdminController::class, 'tampilkan']);
    Route::get('/metrolink/agenda_kota/create', [AdminController::class, 'createAgenda']);
    Route::get('/logout', [SesiController::class, 'logout']);
});

