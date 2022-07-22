<?php

use App\Http\Controllers\Auth\GoogleLoginController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\GoogleSocialiteController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\OfficeController;

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

Route::get('/', function () {
    return view('landing');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/my-profile', function () {
    return view('my-profile');
})->middleware(['auth', 'verified'])->name('my-profile');

Route::get('/bookings', function () {
    return view('booking.bookingView');
})->middleware(['auth', 'verified'])->name('bookings');

Route::get('/bookings/offices', [OfficeController::class, 'index'])
    ->middleware(['auth', 'verified'])->name('offices');

Route::get('/booking/create/{id}', [BookingController::class, 'create'])
    ->middleware(['auth', 'verified'])->name('bookingCreate');

Route::get('/admin/users', function () {
    return view('admin.users.userView');
})->middleware(['auth', 'verified'])->name('users');

require __DIR__ . '/auth.php';


//google login routes
Route::get('auth/google', [GoogleLoginController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleLoginController::class, 'handleCallback']);

//admin routes 
Route::prefix('admin')->middleware('auth.admin')->name('admin.')->group(function () {
    Route::resource('/users', AdminController::class);
    Route::post('/users/create', [AdminController::class, 'store']);
});

//booking routes
// Route::prefix('bookings')->middleware('auth', 'verified')->name('bookings.')->group(function () {
//     // Route::resource('/', BookingController::class);
//     Route::get('/bookings/offices', [OfficeController::class, 'index']);
//     Route::post('/create', [BookingController::class, 'store']);
// });
Route::get('bookings/create/{id}', 'ReservationController@create');
Route::resource('booking', BookingController::class)->except('create');
