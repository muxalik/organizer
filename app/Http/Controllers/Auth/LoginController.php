<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
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

        if (Auth::attempt([$field => $value, 'password' => $request['password']])) {
            return redirect()
                ->route('home')
                ->with('success', __('messages.login'));
        }

        return back()->onlyInput('email-name', $value)
            ->withErrors([
                'credentials' => __('messages.credentials')
            ]);
    }
}
