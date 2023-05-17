<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function home()
    {
        $cars_for_gallery = Car::join('car_images', 'cars.id', '=', 'car_images.car_id')
            ->select('cars.id','cars.displaying_name', 'cars.no_of_seats', 'cars.no_of_suitcases', 'cars.category', 'car_images.vehicle_image')
            ->get();
        return view('app.welcome.home', compact('cars_for_gallery'));
    }
    public function cars()
    {
        $cars_for_gallery = Car::join('car_images', 'cars.id', '=', 'car_images.car_id')
            ->select('cars.id','cars.displaying_name', 'cars.no_of_seats', 'cars.no_of_suitcases', 'cars.category', 'car_images.vehicle_image')
            ->get();
        return view('app.welcome.cars', compact('cars_for_gallery'));
    }
    public function carInfo()
    {
        return view('app.welcome.carinfo');
    }
    public function booking()
    {
        return view('app.welcome.booking');
    }
    public function personalInfo()
    {
        return view('app.welcome.userinfo');
    }
    public function about()
    {
        return view('app.welcome.aboutus');
    }
    public function contact()
    {
        return view('app.welcome.contactus');
    }
    public function destinationInfo()
    {
        return view('app.welcome.destinationinfo');
    }
}
