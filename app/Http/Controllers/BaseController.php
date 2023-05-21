<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Car;
use App\Models\CarImage;
use App\Models\Destination;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function home()
    {
        $cars_for_gallery = Car::join('car_images', 'cars.id', '=', 'car_images.car_id')
        ->leftJoin('car_prices', 'cars.id', '=', 'car_prices.car_id')
            ->select('cars.id', 'cars.displaying_name', 'cars.no_of_seats', 'cars.no_of_suitcases', 'cars.category', 'car_images.vehicle_image'
            , 'car_prices.apr2sep_isk_cost_rental_per_day', 'car_prices.apr2sep_usd_cost_rental_per_day'
            , 'car_prices.apr2sep_gbp_cost_rental_per_day'
            , 'car_prices.sep2apr_isk_cost_rental_per_day'
            , 'car_prices.sep2apr_isk_cost_rental_per_day'
            , 'car_prices.sep2apr_usd_cost_rental_per_day'
            , 'car_prices.sep2apr_gbp_cost_rental_per_day')
            ->get();
        $destinations_for_gallery = Destination::all();

        return view('app.welcome.home', compact('cars_for_gallery', 'destinations_for_gallery'));
    }
    public function cars()
    {
        return view('app.welcome.cars');
    }
    public function carInfo(Request $request, $id)
    {
        $cars = Car::leftJoin('car_prices', 'cars.id', '=', 'car_prices.car_id')
            ->leftJoin('car_availabilities', 'cars.id', '=', 'car_availabilities.car_id')
            ->select('cars.*', 'car_prices.apr2sep_isk_cost_rental_per_day', 'car_prices.apr2sep_isk_cost_rental_per_day'
            , 'car_prices.apr2sep_gbp_cost_rental_per_day'
            , 'car_prices.sep2apr_isk_cost_rental_per_day'
            , 'car_prices.sep2apr_isk_cost_rental_per_day'
            , 'car_prices.sep2apr_usd_cost_rental_per_day'
            , 'car_prices.sep2apr_gbp_cost_rental_per_day'
            )
            ->where('cars.id', $id)
            ->get();
        foreach ($cars as $car) {
            $carImages = CarImage::where('car_id', $car->id)->get();
            $car->images = $carImages;
        }

        $response['data'] = $cars;
        return response()->json($response);
    }
    public function bookingStep2()
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
