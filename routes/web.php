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



//booking routes 

Route::resource('booking', BookingController::class)->except('create');

Route::get('/bookings', function () {
    return view('booking.bookingView');
})->middleware(['auth', 'verified'])->name('bookings');

Route::get('/bookings/offices', [OfficeController::class, 'index'])
    ->middleware(['auth', 'verified'])->name('offices');

Route::get('/bookings/offices/{id}/desks', [OfficeController::class, 'showDesks'])
    ->middleware(['auth', 'verified'])->name('desks');

// Route::get('/bookings/offices/{id}/desks/{id}', [BookingController::class, 'create'])
//     ->middleware(['auth', 'verified'])->name('bookingCreate');



require __DIR__ . '/auth.php';


//google login routes
Route::get('auth/google', [GoogleLoginController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleLoginController::class, 'handleCallback']);

//admin routes 
Route::prefix('admin')->middleware('auth.admin')->name('admin.')->group(function () {
    Route::resource('/users', AdminController::class);
    Route::post('/users/create', [AdminController::class, 'store']);
});

Route::get('/admin/users', function () {
    return view('admin.users.userView');
})->middleware(['auth', 'verified'])->name('users');



Route::resource('booking', BookingController::class)->except('create');


Route::get('/timeslots', [OfficeController::class, 'showTimeslots'])->middleware(['auth', 'verified'])->name('showTimeslots');
