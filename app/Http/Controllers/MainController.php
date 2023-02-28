<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;

class MainController extends Controller
{
    public function index(): View
    {
        return view('home');
    }

    public function chat(): View
    {
        return view('chat');
    }

    public function users(): View
    {
        $users = User::paginate(10);
        $users_count = User::count();

        $verified_users = $users->filter(function (User $user) {
            return !is_null($user->email_verified_at);
        });
        $verified_users_count = $verified_users->count();

        return view('users-index', compact('users', 'users_count', 'verified_users', 'verified_users_count'));
    }
}
