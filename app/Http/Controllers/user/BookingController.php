<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Mail\OrderConfirmationEmail;
use App\Models\Booking;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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
            'flight_no' => $inputs['flight_no'],
            'driver_name' => $inputs['driver_name'],
            'license_no' => $inputs['license_no'],
            'license_valid_date' => $inputs['license_valid_date'],
            'role' => $role,
            'password' => bcrypt($inputs['password']),
        ]);

        $booking_status = "scheduled";

        $booking = Booking::create([
            'pickup_location' => $data['finalpickupLionformation'],
            'dropoff_location' => $data['finaldroplocationinformation'],
            'pickup_date' => $data['finalpickdateinfomation'],
            'return_date' => $data['finaldropdateinfomation'],
            'pickup_time' => $data['finalpicktimeinformation'],
            'return_time' => $data['finaldroptimeinformation'],
            'booking_status' => $booking_status,
            'total_cost' => $data['total_cost'],
            'car_id' => $data['car_id'],
            'user_id' => $user->id,
        ]);

        if ($user && $booking) {
            return response('Success', 200);
        } else {
            return response('Error', 400);
        }

        // Send the welcome email to the user
        // Mail::to($user->email)->send(new OrderConfirmationEmail($user, $booking));

        // $request->session()->regenerate();
        // // return Redirect::route('login.index');
        // return redirect()->route('user.home');
    }
}
