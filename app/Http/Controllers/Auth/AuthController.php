<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginIndex()
    {
        return view('app.auth.login');
    }

    public function registerIndex()
    {
        return view('app.auth.register');
    }
}
