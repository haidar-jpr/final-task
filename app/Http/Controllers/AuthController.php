<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function register()
    {
        return view('auth/register');
    }

    public function registerSave(Request $request)
    {
        Validator::make($request->all(), [
            'nimnik' => 'required',
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed',
        ])->validate();

        User::create([
            'nimnik' => $request->nimnik,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'type' => "0",
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login');
    }

    public function login()
    {
        return view('auth/login');
    }

    public function loginAction(Request $request)
    {
        Validator::make($request->all(), [
            'nimnik' => 'required',
            'password' => 'required',
        ])->validate();

        if (!Auth::attempt($request->only('nimnik', 'password'), $request->boolean('remember-me'))) {
            throw ValidationException::withMessages([
                'nimnik' => trans('auth.failed')
            ]);
        }

        $request->session()->regenerate();
 
        if (auth()->user()->type == 'admin') {
            return redirect()->route('admin/dashboard');
        } else {
            return redirect()->route('dashboard');
        }
         
        // return redirect()->route('dashboard');
        return redirect()->back()->withErrors(['login' => 'Email atau password salah.']);
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        return redirect('/login');
    }
}
