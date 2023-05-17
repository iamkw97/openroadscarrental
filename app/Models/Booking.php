<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'pickup_location',
        'dropoff_location',
        'pickup_date',
        'return_date',
        'pickup_time',
        'return_time',
        'total_cost',
        'car_id',
        'user_id'
    ];
    public function booking_additional_attributes()
    {
        return $this->hasMany(BookingAdditionalAttribute::class);
    }
}
