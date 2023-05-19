<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\Booking;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class BookingController extends Controller
{
    // booking completion
    public function store(UserRequest $request)
    {
        $inputs = $request->validated();
        $data = $request->all();
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

        $booking = Booking::create([
            'pickup_location' => $data['finalpickupLionformation'],
            'dropoff_location' => $data['finaldroplocationinformation'],
            'pickup_date' => $data['finalpickdateinfomation'],
            'return_date' => $data['finaldropdateinfomation'],
            'pickup_time' => $data['finalpicktimeinformation'],
            'return_time' => $data['finaldroptimeinformation'],
            'total_cost' => $data['total_cost'],
            'car_id' => $data['car_id'],
            'user_id' => $user->id,
        ]);

        $request->session()->regenerate();
        // return Redirect::route('login.index');
        return redirect()->route('user.home');
    }
}
