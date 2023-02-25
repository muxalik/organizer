<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;

class ProfileController extends Controller
{
    public function index(User $user): View
    {
        return view('profile.index', compact('user'));
    }
}
