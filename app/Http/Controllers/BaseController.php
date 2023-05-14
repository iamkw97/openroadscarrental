<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function home(){
        $cars_for_gallery = Car::all();
        return view('app.welcome.home', compact('cars_for_gallery'));
    }
    public function cars(){
        return view('app.welcome.cars');
    }
    public function carInfo(){
        return view('app.welcome.carinfo');
    }
    public function booking(){
        return view('app.welcome.booking');
    }
    public function about(){
        return view('app.welcome.aboutus');
    }
    public function contact(){
        return view('app.welcome.contactus');
    }

}
