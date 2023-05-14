<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function userHome(){
    return view('app.dashboards.user.home');
   }
   public function userBookings(){
    return view('app.dashboards.user.bookings');
   }
   public function userCars(){
    return view('app.dashboards.user.cars');
   }
   public function userProfile(){
    return view('app.dashboards.user.profile');
   }
}
