<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;
    protected $fillable = [
        'destination_title',
        'destination_sub_title',
        'published_date',
        'destination_description_introduction',
        'destination_description_body',
        'destination_description_conclusion',
        'destination_image'
    ];
}
