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
        $value = $request['email-name'];
        $field = filter_var($value, FILTER_VALIDATE_EMAIL) ? 'email' : 'name';

        if (Auth::attempt([
            $field => $value,
            'password' => $request->get('password'),
        ], $request->boolean('remember'))) {
            return redirect()
                ->intended(route('home'))
                ->with('success', __('messages.login'));
        }

        return back()->onlyInput('email-name', $value)
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
