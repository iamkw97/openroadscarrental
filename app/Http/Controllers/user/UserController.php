<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userHome()
    {
        $user = auth()->user();
        $bookings = Booking::join('cars', 'bookings.car_id', '=', 'cars.id')
        ->select('bookings.*', 'cars.displaying_name')
            ->where('user_id', '=', $user->id)
            ->get();

        return view('app.dashboards.user.home', compact('bookings'));
    }
    public function userBookings()
    {
        return view('app.dashboards.user.bookings');
    }
    public function userCars()
    {
        return view('app.dashboards.user.cars');
    }
    public function userProfile()
    {
        return view('app.dashboards.user.profile');
    }
}
