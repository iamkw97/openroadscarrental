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
    ->orderByDesc('bookings.id')
    ->get();
        return view('app.dashboards.admin.bookings.bookings', compact('bookings_list'));
    }
    // show admin bookings
    public function show($id)
    {
        $bookings_show = User::join('bookings', 'users.id', '=', 'bookings.user_id')
            ->join('cars', 'bookings.car_id', '=', 'cars.id')
            ->select(
                'users.fullname',
                'users.email',
                'users.address',
                'users.city',
                'users.phone1',
                'users.phone2',
                'users.dob',
                'users.flight_no',
                'users.driver_name',
                'users.license_no',
                'users.license_valid_date',
                'bookings.*',
                'cars.displaying_name',
                'cars.category',
                'cars.no_of_seats',
                'cars.no_of_suitcases'
            )
            ->where('bookings.id', '=', $id)
            ->first();

        $response['data'] = $bookings_show;
        return response()->json($response);
    }
}
