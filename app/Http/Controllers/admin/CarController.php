<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarController extends Controller
{
    // view admin cars
    public function index(){
        return view('app.dashboards.admin.cars.cars');
    }
    // view admin add new car
    public function create(){
        return view('app.dashboards.admin.cars.newcar');
    }
}
