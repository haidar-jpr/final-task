<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth/login');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

//Normal Users Routes List
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::get('/pendaftaran', [HomeController::class, 'pendaftaran'])->name('pendaftaran');

    Route::get('/edit_profile', [HomeController::class, 'edit_profile'])->name('edit_profile');

    route::get('/form_pendaftaran_wsp', [HomeController::class, 'form_pendaftaran_wsp']);
    route::get('/form_pendaftaran_dwp', [HomeController::class, 'form_pendaftaran_dwp']);
    route::get('/form_pendaftaran_asdp', [HomeController::class, 'form_pendaftaran_asdp']);
    route::get('/form_pendaftaran_sop', [HomeController::class, 'form_pendaftaran_sop']);
    route::get('/form_pendaftaran_aap', [HomeController::class, 'form_pendaftaran_aap']);
    route::get('/form_pendaftaran_sbdp', [HomeController::class, 'form_pendaftaran_sbdp']);
    route::get('/form_pendaftaran_jkp', [HomeController::class, 'form_pendaftaran_jkp']);
    route::get('/form_pendaftaran_pbop', [HomeController::class, 'form_pendaftaran_pbop']);
    route::get('/form_pendaftaran_pwp', [HomeController::class, 'form_pendaftaran_pwp']);
    route::get('/form_pendaftaran_bdda', [HomeController::class, 'form_pendaftaran_bdda']);
    route::get('/form_pendaftaran_pwlp', [HomeController::class, 'form_pendaftaran_pwlp']);
    route::get('/form_pendaftaran_apbp', [HomeController::class, 'form_pendaftaran_apbp']);
    route::get('/form_pendaftaran_cml', [HomeController::class, 'form_pendaftaran_cml']);
    // Route::get('/profile', [UserController::class, 'userprofile'])->name('profile');
});

//Admin Routes List
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'adminHome'])->name('admin/dashboard');

    Route::get('/admin/data_pendaftar', [AdminController::class, 'data_pendaftar'])->name('admin/data_pendaftar');

    Route::get('/admin/laporan', [AdminController::class, 'laporan'])->name('admin/laporan');

    Route::get('/admin/proses', [AdminController::class, 'proses'])->name('admin/proses');

    Route::get('/admin/detail_perhitungan', [AdminController::class, 'perhitungan'])->name('admin/detail_perhitungan');
    
    Route::get('/admin/keputusan', [AdminController::class, 'keputusan'])->name('admin/keputusan');

    // Route::get('/admin/profile', [AdminController::class, 'profilepage'])->name('admin/profile');
});
