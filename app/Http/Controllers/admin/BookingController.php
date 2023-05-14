<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    // view admin bookings
    public function index()
    {
        return view('app.dashboards.admin.bookings.bookings');
    }
}
