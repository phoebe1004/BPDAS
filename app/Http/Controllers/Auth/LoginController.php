<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AdminLogin;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showAdminLogin()
    {
        return view('admin.auth.login');
    }

    public function adminLogin(AdminLogin $request)
    {
        $validated = $request->validated();

        $userName = $request->input('user-name');
        $password = $request->input('password');

        if (Auth::attempt(['user_name' => $userName, 'password' => $password])) {
            // validation successful
            return redirect()->route("admin-home");
        }

        // return redirect()->route('admin-login');
        return back()->withErrors([
            'password' => 'The provided credentials do not match our records.',
        ])->onlyInput('password');
    }

    public function adminLogout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('admin-login');
    }
}
