<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request): RedirectResponse
    {
        $credentials = $request->validated();

        if (Auth::attempt([
            'name' => $credentials['email-name'], 
            'password' => $credentials['password']]) || 
            Auth::attempt([
            'email' => $credentials['email-name'], 
            'password' => $credentials['password']]))
        {
            return redirect()
                ->route('home')
                ->with('success', __('messages.login'));
        }

        return back()->withErrors([
            'credentials' => 'Your credentials are incorrect'
        ]);
    }
}
