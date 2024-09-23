<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\facades\Auth;

class UserController extends Controller
{
    //
    public function register()
    {
        return view('auth.register');
    }
    public function registeruser(Request $request)
    {

        $data = $request->validate([

            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);

        $data = new User();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = $request->password;
        $data->save();

        if ($data) {
            return redirect()->route('login');
        }
    }

    public function login()
    {
        return view('auth.login');
    }

    public function loginsave(Request $request)
    {
        $loginsave = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

    
        if (Auth::attempt($loginsave)) {
            // Redirect to dashboard on successful login
            return redirect()->route('dashboard');
        } else {
            // Redirect back with an error message on failed login
            return back()->withErrors([
                'email' => 'The email and password not match please correct',
            ])->withInput(); // Keep the email input to avoid re-entering
        }
    }

    public function dashboard()
    {
        if (Auth::check()) {
            return view('dashboard');
        }
    }

    public function logout()
    {
        Auth::logout();
        return view('auth.login');
    }
}
