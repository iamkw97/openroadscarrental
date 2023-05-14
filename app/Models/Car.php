<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable = [
        'category',
        'vehicle_make',
        'vehicle_model',
        'no_of_seats',
        'no_of_suitcases',
        'gear_box_type',
        'fuel_state',
        'drivers_age_min',
        'drivers_age_max',
        'default_pickup_time',
        'default_return_time',
        'location_kef_airport',
        'location_eykjavik',
        'displaying_name',
        'vehicle_description',

        'free_gps',
        'mileage',
        'wd',
        'air_conditioning',
        'fuel_policy',
        'fuel_type',
        'engine',
        'doors_number',
        'transmission',
        'extras_notset',
        'extras_alloy_wheels',
        'extras_blutooth',
        'extras_damage_waiver',
        'extras_free_cancellation',
        'extras_sunroof',
        'extras_radio',
        'extras_no_deposit',
        'availabality_status',
    ];
    public function car_images()
    {
        return $this->hasMany(CarImage::class);
    }
    public function car_prices()
    {
        return $this->hasMany(CarPrice::class);
    }
    public function car_availabilities()
    {
        return $this->hasMany(CarAvailability::class);
    }
}
