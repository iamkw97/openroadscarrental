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
            'flight_no' => $inputs['flight_no'],
            'driver_name' => $inputs['driver_name'],
            'license_no' => $inputs['license_no'],
            'license_valid_date' => $inputs['license_valid_date'],
            'role' => $role,
            'password' => bcrypt($inputs['password']),
        ]);
        $request->session()->regenerate();
        return redirect()->route('user.home');
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

    public function updateUser(UserRequest $request, $id)
    {
        $inputs = $request->validated();
        $role = "user";

        $user = User::findOrFail($id);
        $user->fullname = $inputs['fullname'];
        $user->email = $inputs['email'];
        $user->address = $inputs['address'];
        $user->city = $inputs['city'];
        $user->phone1 = $inputs['phone1'];
        $user->phone2 = $inputs['phone2'];
        $user->dob = $inputs['dob'];
        $user->license_no = $inputs['license_no'];
        $user->role = $role;
        $user->password = bcrypt($inputs['password']);
        $user->update();

        $request->session()->regenerate();
        return redirect()->back();
    }
}
