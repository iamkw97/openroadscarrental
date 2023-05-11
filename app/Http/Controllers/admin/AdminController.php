<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // view admin dashboard
    public function adminHome(){
        return view('app.dashboards.admin.home');
    }
}
