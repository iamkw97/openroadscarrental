<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingAdditionalAttribute extends Model
{
    use HasFactory;
    protected $fillable = [
        'attribute',
        'cost',
        'booking_id'
    ];

    public function bookings()
    {
        return $this->belongsTo(Booking::class);
    }
}
