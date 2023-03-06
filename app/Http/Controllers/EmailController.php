<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function index(): View
    {
        return view('email');
    }
}
