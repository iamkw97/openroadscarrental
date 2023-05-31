<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // view admin dashboard
    public function adminHome()
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
        return view('app.dashboards.admin.home', compact('bookings_list'));
    }
}
