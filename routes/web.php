<?php

use App\Http\Controllers\Auth\GoogleLoginController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\GoogleSocialiteController;
use App\Http\Controllers\Admin\AdminController;
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
