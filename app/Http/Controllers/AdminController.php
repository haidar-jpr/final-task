<?php

namespace App\Http\Controllers;

class AdminController extends Controller {
    public function adminHome()
    {
        return view('admin.dashboard');
    }

    public function data_pendaftar(){
        return view('admin.data-pendaftar');
    }

    public function laporan(){
        return view('admin.laporan');
    }

    public function proses(){
        return view('admin.proses');
    }

    public function perhitungan(){
        return view('admin.detail-perhitungan');
    }

    public function keputusan(){
        return view('admin.keputusan');
    }

    public function kriteria(){
        return view('admin.kriteria');
    }

    public function faktor(){
        return view('admin.faktor');
    }
}