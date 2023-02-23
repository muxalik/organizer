<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;

class UserController extends Controller
{
    public function index(User $user): View
    {
        return view('user.profile', compact('user'));
    }

    public function teams(User $user): View
    {
        return view('user.teams', compact('user'));
    }

    public function projects(User $user): View
    {
        return view('user.projects', compact('user'));
    }

    public function connections(User $user): View
    {
        return view('user.connections', compact('user'));
    }
}
