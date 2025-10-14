<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view ('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)){
            $user = Auth::user();

            if ($user->role == 'admin'){
                return redirect()->route('admin.dashboard');
            } elseif ($user->role == 'dokter') {
                return redirect()->route('dokter.dashboard');
            } else {
                return redirect()->route('pasien.dashboard');
            }
        }

        return back()->withErrors(['email'=> 'Email atau Password salah !']);
    }

    public function register(Request $request)
    {
        $request->validate([
            'nama'=> ['required', 'string', 'max:225' ],
            'alamat'=> ['required', 'string', 'max:225' ],
            'no_ktp'=> ['required', 'string', 'max:30' ],
            'no_hp'=> ['required', 'string', 'max:20' ],
            'email'=> ['required', 'string', 'email', 'max:225', 'unique:users,email' ],
            'nama'=> ['required', 'confirmed' ],
        ]);

        user::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_ktp' => $request->no_ktp,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'pasien',
        ]);
        return redirect()->route('login');
    }

}
