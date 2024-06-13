<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class MahasiswaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        return view('dashboard', compact('user'));
    }

    public function pendaftaran()
    {
        return view('pendaftaran');
    }

    public function edit_profile()
    {
        $user = Auth::user();
        return view('edit-profile', compact('user'));
    }

    public function update_profile(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'nullable|string|max:255',
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        // Memperbarui data pengguna
        $user->name = $request->input('nama');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->password = $request->input('pass');
        $user->update();

        return redirect()->route('edit_profile')->with('success');
    }

    // ! Mengarahkan ke view form pendaftaran asisten praktikum
    public function form_pendaftaran_wsp()
    {
        return view('form_pendaftaran.form-pendaftaran-wsp');
    }

    public function form_pendaftaran_dwp()
    {
        return view('form_pendaftaran.form-pendaftaran-dwp');
    }

    public function form_pendaftaran_asdp()
    {
        return view('form_pendaftaran.form-pendaftaran-asdp');
    }

    public function form_pendaftaran_sop()
    {
        return view('form_pendaftaran.form-pendaftaran-sop');
    }

    public function form_pendaftaran_aap()
    {
        return view('form_pendaftaran.form-pendaftaran-aap');
    }

    public function form_pendaftaran_sbdp()
    {
        return view('form_pendaftaran.form-pendaftaran-sbdp');
    }

    public function form_pendaftaran_jkp()
    {
        return view('form_pendaftaran.form-pendaftaran-jkp');
    }

    public function form_pendaftaran_pbop()
    {
        return view('form_pendaftaran.form-pendaftaran-pbop');
    }

    public function form_pendaftaran_pwp()
    {
        return view('form_pendaftaran.form-pendaftaran-pwp');
    }

    public function form_pendaftaran_bdda()
    {
        return view('form_pendaftaran.form-pendaftaran-bdda');
    }

    public function form_pendaftaran_pwlp()
    {
        return view('form_pendaftaran.form-pendaftaran-pwlp');
    }

    public function form_pendaftaran_apbp()
    {
        return view('form_pendaftaran.form-pendaftaran-apbp');
    }

    public function form_pendaftaran_cml()
    {
        return view('form_pendaftaran.form-pendaftaran-cml');
    }
}
