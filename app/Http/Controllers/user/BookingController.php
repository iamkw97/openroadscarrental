<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Mail\OrderConfirmationEmail;
use App\Mail\OrderNotificationEmail;
use App\Models\Booking;
use App\Models\Car;
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

        // moving image into public directory
        if ($request->hasFile('license_img')) {
            $image = $request->file('license_img');
            $license_img_name = time() . rand(1, 9) . '.' . $image->getClientOriginalExtension();
            $image->move('img/users/license_img/', $license_img_name);
        }

        $user_email_input = $inputs['email'];

        // Check if the email already exists
        $user = User::where('email', $user_email_input)->first();

        // if already registered user
        if ($user) {
            $user->update([
                'address' => $inputs['address'],
                'city' => $inputs['city'],
                'phone1' => $inputs['phone1'],
                'phone2' => $inputs['phone2'],
                'flight_no' => $inputs['flight_no'],
                'driver_name' => $inputs['driver_name'],
                'license_no' => $inputs['license_no'],
                'license_valid_date' => $inputs['license_valid_date'],
                'license_img' => $license_img_name,
            ]);

            $booking_status = "scheduled";
            $car = Car::findOrFail($data['car_id']);

            $booking = Booking::create([
                'pickup_location' => $data['pickupLocation'],
                'dropoff_location' => $data['dropOffLocation'],
                'pickup_date' => $data['pickupDate'],
                'return_date' => $data['returnDate'],
                'pickup_time' => $data['pickupTime'],
                'return_time' => $data['returnTime'],
                'booking_status' => $booking_status,
                'additional_baby_seat' => $data['additionalBabySeat'],
                'additional_wifi' => $data['additionalWifi'],
                'additional_driver' => $data['additionalDriver'],
                'total_cost' => $data['totalCost'],
                'car_id' => $data['car_id'],
                'user_id' => $user->id,
            ]);

            // if newly registered user
        } else {
            $user = User::create([
                'fullname' => $inputs['fullname'],
                'email' => $inputs['email'],
                'address' => $inputs['address'],
                'city' => $inputs['city'],
                'phone1' => $inputs['phone1'],
                'phone2' => $inputs['phone2'],
                'flight_no' => $inputs['flight_no'],
                'driver_name' => $inputs['driver_name'],
                'license_no' => $inputs['license_no'],
                'license_valid_date' => $inputs['license_valid_date'],
                'license_img' => $license_img_name,
                'role' => $role,
                'password' => bcrypt($inputs['password']),
            ]);

            $booking_status = "scheduled";
            $car = Car::findOrFail($data['car_id']);

            $booking = Booking::create([
                'pickup_location' => $data['pickupLocation'],
                'dropoff_location' => $data['dropOffLocation'],
                'pickup_date' => $data['pickupDate'],
                'return_date' => $data['returnDate'],
                'pickup_time' => $data['pickupTime'],
                'return_time' => $data['returnTime'],
                'booking_status' => $booking_status,
                'additional_baby_seat' => $data['additionalBabySeat'],
                'additional_wifi' => $data['additionalWifi'],
                'additional_driver' => $data['additionalDriver'],
                'total_cost' => $data['totalCost'],
                'car_id' => $data['car_id'],
                'user_id' => $user->id,
            ]);
        }


        Mail::to($inputs['email'])->send(new OrderConfirmationEmail($user, $booking, $car));
        Mail::to('openroadscarrental@gmail.com')->send(new OrderNotificationEmail($user, $booking, $car));

        if ($booking) {
            return response('Success', 200);
        } else {
            return response('Error', 400);
        }
    }
    // ----------------------------------------------------------
    // new booking from user panel
    // *************************
    // booking completion
    public function storeNewBooking(Request $request, $id)
    {
        $data = $request->all();

        $booking_status = "scheduled";
        $user = User::findOrFail($id);
        $car = Car::findOrFail($data['carID']);

        $booking = Booking::create([
            'pickup_location' => $data['pickup_location'],
            'dropoff_location' => $data['return_location'],
            'pickup_date' => $data['pickup_date'],
            'return_date' => $data['pickup_date'],
            'pickup_time' => $data['return_time'],
            'return_time' => $data['return_time'],
            'booking_status' => $booking_status,
            'additional_baby_seat' => $data['additionalBabySeat'],
                'additional_wifi' => $data['additionalWifi'],
                'additional_driver' => $data['additionalDriver'],
            'total_cost' => $data['totalCost'],
            'car_id' => $data['carID'],
            'user_id' => $id,
        ]);

        Mail::to($user->email)->send(new OrderConfirmationEmail($user, $booking, $car));
        Mail::to('openroadscarrental@gmail.com')->send(new OrderNotificationEmail($user, $booking, $car));

        if ($booking) {
            return response('Success', 200);
        } else {
            return response('Error', 400);
        }
    }
    // *************************
}
