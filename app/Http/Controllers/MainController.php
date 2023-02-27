<?php

namespace App\Http\Controllers;

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
        return view('users-index');
    }
}
