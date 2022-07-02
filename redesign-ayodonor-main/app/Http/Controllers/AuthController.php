<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        if (!Auth::attempt([
            'email' => $request['email'],
            'password' => $request['password']
        ])) {
            return redirect('login')->with('error', 'Email atau password salah!');
        }

        if (isset($request['remember_me']) and $request['remember_me'] == true) {
            return redirect()->intended('dashboard')->withCookies([
                cookie()->forever('email', $request['email']),
                cookie()->forever('password', $request['password'])
            ]);
        }

        return redirect()->intended('dashboard');
    }

    public function registration()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'password' => $request['password'],
            'address' => $request['address'],
            'blood_type' => $request['blood_type']
        ]);

        if (!Auth::attempt([
            'email' => $request['email'],
            'password' => $request['password']
        ])) {
            return redirect('login')->with('error', 'Email atau password salah!');
        }

        return redirect()->intended('dashboard');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->intended('dashboard');
    }

    public function me()
    {
        return view('auth.profile');
    }

    public function updateProfile(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'address' => 'required|string',
            'blood_type' => 'required|in:A,B,AB,O',
            'password' => 'sometimes|confirmed',
            'password_confirmation' => 'sometimes',
        ]);

        if ($validated['password'] === null) {
            unset($validated['password']);
            unset($validated['password_confirmation']);
        }

        \auth()->user()->update($validated);
        return redirect('me')->with('success', 'Berhasil mengubah profile!');
    }
}
