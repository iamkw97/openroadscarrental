<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
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

    public function registerStore(UserRequest $request)
    {
        $inputs = $request->validated();

        $user = User::create([
            'fullname' => $inputs['fullname'],
            'email' => $inputs['email'],
            'address' => $inputs['address'],
            'city' => $inputs['city'],
            'phone1' => $inputs['phone1'],
            'phone2' => $inputs['phone2'],
            'dob' => $inputs['dob'],
            'license_no' => $inputs['license_no'],
            'password' => $inputs['password'],
        ]);
    }
}
