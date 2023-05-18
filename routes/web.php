<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\BookingController;
use App\Http\Controllers\admin\CarController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\user\UserController;
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
Route::get('/cars', [BaseController::class, 'cars'])->name('cars.index');
Route::get('/cars/view/{id}', [BaseController::class, 'carInfo'])->name('cars.show');
Route::get('/booking/step2', [BaseController::class, 'bookingStep2'])->name('cars.bookingstep2');
Route::get('/booking', [BaseController::class, 'booking'])->name('booking.index');
Route::get('/aboutus', [BaseController::class, 'about'])->name('about.index');
Route::get('/contactus', [BaseController::class, 'contact'])->name('contact.index');
Route::get('/destinations', [BaseController::class, 'destinationInfo'])->name('destinationinfo.index');

Route::get('/getcars', [CarController::class, 'getcar'])->name('getcars.details');

Route::middleware(['web'])->group(function () {
    /*
    |--------------------------------------------------------------------------
    | Auth Routes
    |--------------------------------------------------------------------------
    */
    Route::get('/register', [AuthController::class, 'registerIndex'])->name('register.index');
    Route::get('/login', [AuthController::class, 'loginIndex'])->name('login.index');
    Route::post('/register/store', [AuthController::class, 'registerStore'])->name('register.store');
    Route::post('/login/store', [AuthController::class, 'loginAuthenticated'])->name('login.authenticate');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    /*
    |--------------------------------------------------------------------------
    | Admin Protected Routes
    |--------------------------------------------------------------------------
    */
    Route::middleware(['admin'])->group(function () {
        Route::get('/admin/home', [AdminController::class, 'adminHome'])->name('admin.home');
        Route::get('/admin/cars', [CarController::class, 'index'])->name('admin.cars.index');
        Route::get('/admin/cars/new', [CarController::class, 'create'])->name('admin.cars.create');
        Route::post('/admin/cars/store', [CarController::class, 'store'])->name('admin.cars.store');
        Route::get('/admin/cars/store', [BookingController::class, 'index'])->name('admin.bookings.index');
    });

    /*
    |--------------------------------------------------------------------------
    | User Protected Routes
    |--------------------------------------------------------------------------
    */
    Route::middleware(['user'])->group(function () {
        Route::get('/user/home', [UserController::class, 'userHome'])->name('user.home');
        Route::get('/user/bookings', [UserController::class, 'userBookings'])->name('user.bookings');
        Route::get('/user/cars/', [UserController::class, 'userCars'])->name('user.cars');
        Route::get('/user/profile', [UserController::class, 'userProfile'])->name('user.profile');
    });
});
