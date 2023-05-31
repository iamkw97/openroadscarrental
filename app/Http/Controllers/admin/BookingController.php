<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\User;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    // view admin bookings
    public function index()
    {
        $bookings_list = User::join('bookings', 'users.id', '=', 'bookings.user_id')
            ->join('cars', 'bookings.car_id', '=', 'cars.id')
            ->select(
                'users.fullname',
                'users.email',
                'bookings.*',
                'cars.displaying_name'
            )
            ->get();



        return view('app.dashboards.admin.bookings.bookings', compact('bookings_list'));
    }
}
