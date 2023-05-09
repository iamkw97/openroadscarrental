<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function home(){
        return view('app.welcome.home');
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
