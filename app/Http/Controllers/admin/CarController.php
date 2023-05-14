<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\CarAvailability;
use App\Models\CarImage;
use App\Models\CarPrice;
use Illuminate\Http\Request;

class CarController extends Controller
{
    // view admin cars
    public function index()
    {
        return view('app.dashboards.admin.cars.cars');
    }
    // view admin add new car
    public function create()
    {
        return view('app.dashboards.admin.cars.newcar');
    }
    // store admin new car
    public function store(Request $request)
    {
        $data = $request->all();
        $availabality_status = "available";

        // store data into Car table
        $car = Car::create([
            'category' => $data['category'],
            'vehicle_make' => $data['vehicle_make'],
            'vehicle_model' => $data['vehicle_model'],
            'no_of_seats' => $data['no_of_seats'],
            'no_of_suitcases' => $data['no_of_suitcases'],
            'gear_box_type' => $data['gear_box_type'],
            'fuel_state' => $data['fuel_state'],
            'drivers_age_min' => $data['drivers_age_min'],
            'drivers_age_max' => $data['drivers_age_max'],
            'default_pickup_time' => $data['default_pickup_time'],
            'default_return_time' => $data['default_return_time'],
            'location_kef_airport' => $data['location_kef_airport'],
            'location_eykjavik' => $data['location_eykjavik'],
            'displaying_name' => $data['displaying_name'],
            'vehicle_description' => $data['vehicle_description'],

            'free_gps' => $data['free_gps'],
            'mileage' => $data['mileage'],
            'wd' => $data['wd'],
            'air_conditioning' => $data['air_conditioning'],
            'fuel_policy' => $data['fuel_policy'],
            'fuel_type' => $data['fuel_type'],
            'engine' => $data['engine'],
            'doors_number' => $data['doors_number'],
            'transmission' => $data['transmission'],
            'extras_notset' => $data['extras_notset'],
            'extras_alloy_wheels' => $data['extras_alloy_wheels'],
            'extras_blutooth' => $data['extras_blutooth'],
            'extras_damage_waiver' => $data['extras_damage_waiver'],
            'extras_free_cancellation' => $data['extras_free_cancellation'],
            'extras_sunroof' => $data['extras_sunroof'],
            'extras_radio' => $data['extras_radio'],
            'extras_no_deposit' => $data['extras_no_deposit'],
            'availabality_status' => $availabality_status,
        ]);

        // store car images
        if ($request->hasFile('vehicle_image')) {
            foreach ($request->file('vehicle_image') as $index => $image) {
                $imageName = time() . rand(1, 9) . '.' . $image->getClientOriginalExtension();
                $image->storeAs('public/cars', $imageName);

                $customerNic = new CarImage();
                $customerNic->vehicle_image = $imageName;
                $customerNic->car_id = $car->id;
                $customerNic->save();
            }
        }

        // store data into Car prices
        $car = CarPrice::create([
            'cost_initial' => $data['cost_initial'],
            'tax_initial' => $data['tax_initial'],
            'cost_rental_per_day' => $data['cost_rental_per_day'],
            'tax_rental_per_day' => $data['tax_rental_per_day'],
            'cost_rental_per_hour' => $data['cost_rental_per_hour'],
            'tax_rental_per_hour' => $data['tax_rental_per_hour'],
            'cost_delivery' => $data['cost_delivery'],
            'tax_delivery' => $data['tax_delivery'],
            'cost_delivery_return' => $data['cost_delivery_return'],
            'tax_delivery_return' => $data['tax_delivery_return'],
            'cost_security' => $data['cost_security'],
            'tax_security' => $data['tax_security'],
            'cost_oneway' => $data['cost_oneway'],
            'tax_oneway' => $data['tax_oneway'],
            'cost_late_pickup' => $data['cost_late_pickup'],

            'tax_late_pickup' => $data['tax_late_pickup'],
            'cost_late_return' => $data['cost_late_return'],
            'tax_late_return' => $data['tax_late_return'],
            'cost_customer_pickup_fee' => $data['cost_customer_pickup_fee'],
            'tax_customer_pickup_fee' => $data['tax_customer_pickup_fee'],
            'cost_customer_return_fee' => $data['cost_customer_return_fee'],
            'tax_customer_return_fee' => $data['tax_customer_return_fee'],
            'car_id' => $car->id
        ]);

        // store data into Car availability
        $car = CarAvailability::create([
            'avalable_start_date' => $data['avalable_start_date'],
            'avalable_end_date' => $data['avalable_end_date'],
            'car_id' => $car->id
        ]);

        if ($car) {
            return response('Success', 200);
        } else {
            return response('Error', 400);
        }
    }


    public function getcar()
    {
        $cars = Car::leftJoin('car_prices', 'cars.id', '=', 'car_prices.car_id')
            ->select('cars.*', 'car_prices.cost_rental_per_day', 'car_prices.cost_rental_per_hour')
            ->get();

        foreach ($cars as $car) {
            $carImages = CarImage::where('car_id', $car->id)->get();
            $car->images = $carImages;
        }

        $response['data'] = $cars;
        return response()->json($response);
    }
}
