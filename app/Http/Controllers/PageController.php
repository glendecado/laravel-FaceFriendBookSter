<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function main()
    {
        if (Auth::check()) {
            return view('pages.users.index');
        } else {
            return view('auth.login');
        }
    }
}
