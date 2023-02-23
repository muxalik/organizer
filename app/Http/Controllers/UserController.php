<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;

class UserController extends Controller
{
    public function index(User $user): View
    {
        return view('user.index', compact('user'));
    }
}
