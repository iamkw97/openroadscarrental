<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Car;
use App\Models\CarImage;
use App\Models\CarPrice;
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
        $cars_for_gallery = Car::join('car_images', 'cars.id', '=', 'car_images.car_id')
            ->leftJoin('car_prices', 'cars.id', '=', 'car_prices.car_id')
            ->select(
                'cars.id',
                'cars.displaying_name',
                'cars.no_of_seats',
                'cars.no_of_suitcases',
                'cars.category',
                'car_images.vehicle_image',
                'car_prices.apr2sep_isk_cost_rental_per_day',
                'car_prices.apr2sep_usd_cost_rental_per_day',
                'car_prices.apr2sep_eur_cost_rental_per_day',
                'car_prices.sep2apr_isk_cost_rental_per_day',
                'car_prices.sep2apr_isk_cost_rental_per_day',
                'car_prices.sep2apr_usd_cost_rental_per_day',
                'car_prices.sep2apr_eur_cost_rental_per_day'
            )
            ->get();

        return view('app.dashboards.user.cars', compact('cars_for_gallery'));
    }
    public function userCarInfo($id)
    {
        $car = Car::findOrFail($id);
        $car_id = $car->id;
        $car_image = CarImage::findOrFail($car_id);
        $car_price = CarPrice::findOrFail($car_id);

        return view('app.dashboards.user.newbooking', compact('car','car_image','car_price'));
    }
    public function userProfile()
    {
        return view('app.dashboards.user.profile');
    }
}
