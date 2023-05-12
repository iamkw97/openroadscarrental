<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\CarController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\BaseController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
|--------------------------------------------------------------------------
| Welcome Routes
|--------------------------------------------------------------------------
*/
Route::get('/', [BaseController::class, 'home'])->name('home.index');
Route::get('/login', [AuthController::class, 'loginIndex'])->name('login.index');
Route::get('/register', [AuthController::class, 'registerIndex'])->name('register.index');
Route::get('/cars', [BaseController::class, 'cars'])->name('cars.index');
Route::get('/cars/view', [BaseController::class, 'carInfo'])->name('cars.show');
Route::get('/booking', [BaseController::class, 'booking'])->name('booking.index');
Route::get('/aboutus', [BaseController::class, 'about'])->name('about.index');
Route::get('/contactus', [BaseController::class, 'contact'])->name('contact.index');
/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::get('/admin/home', [AdminController::class, 'adminHome'])->name('admin.home');
Route::get('/admin/cars', [CarController::class, 'index'])->name('admin.cars.index');
Route::get('/admin/cars/new', [CarController::class, 'create'])->name('admin.cars.create');
Route::post('/admin/cars/store', [CarController::class, 'store'])->name('admin.cars.store');
