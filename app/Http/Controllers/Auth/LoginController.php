<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(): View
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request): RedirectResponse
    {
        if (Auth::attempt($request->validated(), $request->boolean('remember'))) {
            return redirect()
                ->intended(route('home'))
                ->with('success', __('messages.login'));
        }

        return back()->onlyInput('email-name', $request->email ?? $request->name)
            ->withErrors(['credentials' => __('messages.credentials')]);
    }

    public function logout(): RedirectResponse
    {
        auth()->logout();

        session()->invalidate();
        session()->regenerateToken();

        return redirect()->route('login.form');
    }
}
