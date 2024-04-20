<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function indexLogin(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.auth.login');

    }

    public function login(Request $request): RedirectResponse
    {
        $credentials = $request->only('email', 'password');
        if (auth()->attempt($credentials)) {
            return redirect()->route('admin.user.index');
        }
        return redirect()->back();

    }

    public function logout(): RedirectResponse
    {
        auth()->logout();
        return redirect()->route('login.index');
    }

}
