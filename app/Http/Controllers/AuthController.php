<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login'); // your login.blade.php
    }

    public function login(Request $request)
{
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        $user = Auth::user(); // kunin yung logged-in user

        // check role
        if ($user->role === 'healthcare') {
            return redirect()->route('healthcare.dashboard');
        } else {
            return redirect()->route('donor.dashboard');
        }
    }

    return back()->withErrors([
        'email' => 'Invalid credentials',
    ]);
}


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
