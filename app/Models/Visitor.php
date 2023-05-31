<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;
    protected $fillable = [
        'ip_address',
        'user_agent',
        'visited_at',
    ];

    public static function totalCount()
    {
        return self::count();
    }

    public static function todayTotalCount()
    {
        return self::whereDate('visited_at', today())->count();
    }

    public static function todayMobileCount()
    {
        return self::whereDate('visited_at', today())->where('user_agent', 'like', '%Mobile%')->count();
    }

    public static function todayDesktopCount()
    {
        return self::whereDate('visited_at', today())->where('user_agent', 'not like', '%Mobile%')->count();
    }
}
