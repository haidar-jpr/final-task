<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MahasiswaController;
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
    Route::get('/dashboard', [MahasiswaController::class, 'index'])->name('dashboard');

    Route::get('/pendaftaran', [MahasiswaController::class, 'pendaftaran'])->name('pendaftaran');

    Route::get('/edit_profile', [MahasiswaController::class, 'edit_profile'])->name('edit_profile');
    Route::put('/edit_profile/{id}', [MahasiswaController::class, 'update_profile'])->name('edit_profile.update_profile');

    route::get('/form_pendaftaran_wsp', [MahasiswaController::class, 'form_pendaftaran_wsp']);
    route::get('/form_pendaftaran_dwp', [MahasiswaController::class, 'form_pendaftaran_dwp']);
    route::get('/form_pendaftaran_asdp', [MahasiswaController::class, 'form_pendaftaran_asdp']);
    route::get('/form_pendaftaran_sop', [MahasiswaController::class, 'form_pendaftaran_sop']);
    route::get('/form_pendaftaran_aap', [MahasiswaController::class, 'form_pendaftaran_aap']);
    route::get('/form_pendaftaran_sbdp', [MahasiswaController::class, 'form_pendaftaran_sbdp']);
    route::get('/form_pendaftaran_jkp', [MahasiswaController::class, 'form_pendaftaran_jkp']);
    route::get('/form_pendaftaran_pbop', [MahasiswaController::class, 'form_pendaftaran_pbop']);
    route::get('/form_pendaftaran_pwp', [MahasiswaController::class, 'form_pendaftaran_pwp']);
    route::get('/form_pendaftaran_bdda', [MahasiswaController::class, 'form_pendaftaran_bdda']);
    route::get('/form_pendaftaran_pwlp', [MahasiswaController::class, 'form_pendaftaran_pwlp']);
    route::get('/form_pendaftaran_apbp', [MahasiswaController::class, 'form_pendaftaran_apbp']);
    route::get('/form_pendaftaran_cml', [MahasiswaController::class, 'form_pendaftaran_cml']);
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

    Route::get('/admin/kriteria', [AdminController::class, 'kriteria'])->name('admin/kriteria');

    Route::get('/admin/faktor', [AdminController::class, 'faktor'])->name('admin/faktor');

    // Route::get('/admin/profile', [AdminController::class, 'profilepage'])->name('admin/profile');
});
