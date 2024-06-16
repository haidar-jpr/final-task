<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
// use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MahasiswaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        // $user = DB::select('SELECT * FROM users, mahasiswa WHERE users.id = mahasiswa.nim');
        return view('dashboard', compact('user'));
    }

    public function pendaftaran()
    {
        $user = Auth::user();
        return view('pendaftaran', compact('user'));
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
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'nullable|string|max:255',
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        // Memperbarui data pengguna
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->password = Hash::make($request->input('pass'));
        $user->update();

        return redirect()->route('edit_profile')->with('success');
    }

    // ! Mengarahkan ke view form pendaftaran asisten praktikum
    public function form_pendaftaran_wsp()
    {
        $user = Auth::user();
        return view('form_pendaftaran.form-pendaftaran-wsp', compact('user'));
    }

    public function form_pendaftaran_dwp()
    {
        $user = Auth::user();
        return view('form_pendaftaran.form-pendaftaran-dwp', compact('user'));
    }

    public function form_pendaftaran_asdp()
    {
        $user = Auth::user();
        return view('form_pendaftaran.form-pendaftaran-asdp', compact('user'));
    }

    public function form_pendaftaran_sop()
    {
        $user = Auth::user();
        return view('form_pendaftaran.form-pendaftaran-sop', compact('user'));
    }

    public function form_pendaftaran_aap()
    {
        $user = Auth::user();
        return view('form_pendaftaran.form-pendaftaran-aap', compact('user'));
    }

    public function form_pendaftaran_sbdp()
    {
        $user = Auth::user();
        return view('form_pendaftaran.form-pendaftaran-sbdp', compact('user'));
    }

    public function form_pendaftaran_jkp()
    {
        $user = Auth::user();
        return view('form_pendaftaran.form-pendaftaran-jkp', compact('user'));
    }

    public function form_pendaftaran_pbop()
    {
        $user = Auth::user();
        return view('form_pendaftaran.form-pendaftaran-pbop', compact('user'));
    }

    public function form_pendaftaran_pwp()
    {
        $user = Auth::user();
        return view('form_pendaftaran.form-pendaftaran-pwp', compact('user'));
    }

    public function form_pendaftaran_bdda()
    {
        $user = Auth::user();
        return view('form_pendaftaran.form-pendaftaran-bdda', compact('user'));
    }

    public function form_pendaftaran_pwlp()
    {
        $user = Auth::user();
        return view('form_pendaftaran.form-pendaftaran-pwlp', compact('user'));
    }

    public function form_pendaftaran_apbp()
    {
        $user = Auth::user();
        return view('form_pendaftaran.form-pendaftaran-apbp', compact('user'));
    }

    public function form_pendaftaran_cml()
    {
        $user = Auth::user();
        return view('form_pendaftaran.form-pendaftaran-cml', compact('user'));
    }
}
