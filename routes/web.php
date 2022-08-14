<?php

use App\Http\Controllers\Auth\GoogleLoginController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\GoogleSocialiteController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\OfficeController;
use Database\Seeders\BookingSeeder;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// navigation routes
Route::get('/', function () {
    return view('landing');
});

Route::get('/dashboard', function () {
    return view('booking.bookingView');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/my-profile', function () {
    return view('my-profile');
})->middleware(['auth', 'verified'])->name('my-profile');



//booking routes 

Route::resource('booking', BookingController::class)->middleware(['auth', 'verified']);


Route::get('/bookings', [BookingController::class, 'index'])
    ->middleware(['auth', 'verified'])->name('bookings');


Route::delete('/cancelBooking/{id}', [BookingController::class, 'destroy'])
    ->middleware(['auth', 'verified'])->name('cancelBooking');

Route::get('/bookings/offices', [OfficeController::class, 'index'])
    ->middleware(['auth', 'verified'])->name('offices');

Route::get('/bookings/offices/{id}/desks', [OfficeController::class, 'showDesks'])
    ->middleware(['auth', 'verified'])->name('desks');

Route::get('bookings/offices/desks/{id}/timeslots/', [OfficeController::class, 'showTimeslots'])->name('showTimeslots');





require __DIR__ . '/auth.php';


//google login routes
Route::get('auth/google', [GoogleLoginController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleLoginController::class, 'handleCallback']);

//admin routes 
Route::prefix('admin')->middleware('auth.admin')->name('admin.')->group(function () {
    Route::resource('/users', AdminController::class);
    Route::post('/users/create', [AdminController::class, 'store']);
    Route::get('users/bookings/{id}', [AdminController::class, 'userBookings'])->name('userBookings');
});






Route::post('/bookTimeslot', [OfficeController::class, 'bookTimeslot'])->name('bookingCreate');
