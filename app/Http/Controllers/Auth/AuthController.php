<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function registerIndex()
    {
        return view('app.auth.register');
    }

    public function registerStore(UserRequest $request)
    {
        $inputs = $request->validated();
        $role = "user";
        $user = User::create([
            'fullname' => $inputs['fullname'],
            'email' => $inputs['email'],
            'address' => $inputs['address'],
            'city' => $inputs['city'],
            'phone1' => $inputs['phone1'],
            'phone2' => $inputs['phone2'],
            'dob' => $inputs['dob'],
            'license_no' => $inputs['license_no'],
            'role' => $role,
            'password' => bcrypt($inputs['password']),
        ]);
    }

    public function loginIndex()
    {
        return view('app.auth.login');
    }

    public function loginAuthenticated(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (auth()->user()->role == 'admin') {
                return redirect()->route('admin.home');
            }
            if (auth()->user()->role == 'user') {
                return redirect()->route('user.home');
            }
        }
    }

    public function logout()
    {
        session()->flush();
        return redirect()->route('home.index');
    }
}
