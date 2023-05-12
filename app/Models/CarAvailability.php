<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarAvailability extends Model
{
    use HasFactory;
    protected $fillable = [
        'avalable_start_date',
        'avalable_end_date',
        'car_id'
    ];

    public function cars()
    {
        return $this->belongsTo(Car::class);
    }
}
