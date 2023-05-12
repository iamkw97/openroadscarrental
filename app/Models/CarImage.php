<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarImage extends Model
{
    use HasFactory;
    protected $fillable = [
        'vehicle_image',
        'car_id'
    ];

    public function cars()
    {
        return $this->belongsTo(Car::class);
    }
}
