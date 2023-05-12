<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarPrice extends Model
{
    use HasFactory;
    protected $fillable = [
        'cost_initial',
        'tax_initial',
        'cost_rental_per_day',
        'tax_rental_per_day',
        'cost_rental_per_hour',
        'tax_rental_per_hour',
        'cost_delivery',
        'tax_delivery',
        'cost_delivery_return',
        'tax_delivery_return',
        'cost_security',
        'tax_security',
        'cost_oneway',
        'tax_oneway',
        'cost_late_pickup',
        'tax_late_pickup',
        'cost_late_return',
        'tax_late_return',
        'cost_customer_pickup_fee',
        'tax_customer_pickup_fee',
        'cost_customer_return_fee',
        'tax_customer_return_fee',
        'car_id'
    ];

    public function cars()
    {
        return $this->belongsTo(Car::class);
    }
}
