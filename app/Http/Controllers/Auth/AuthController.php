<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function show_login_form()
    {
        return view('pages.auth.login');
    }

    public function show_register_form(){
        return view('pages.auth.register');
    }
}
