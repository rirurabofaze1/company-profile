<?php

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

Route::get('/', function () {
    return view('welcome');
});

use App\Models\Room;

Route::get('/rooms', function () {
    $rooms = Room::all();
    return view('rooms', compact('rooms'));
});



Route::get('/rooms/{slug}', function ($slug) {
    $room = Room::where('slug', $slug)->firstOrFail();
    return view('room-detail', compact('room'));
});

use App\Http\Controllers\Admin\AuthController;

Route::get('/admin/login', [AuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'login']);
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');

Route::prefix('admin')
    ->middleware('admin')
    ->name('admin.')
    ->group(function () {
        Route::resource('rooms', \App\Http\Controllers\Admin\RoomController::class);
    });

Route::view('/about', 'about')->name('about');

Route::view('/contact', 'contact')->name('contact');

use App\Http\Controllers\BookingController;

Route::post('/booking-wa', [BookingController::class, 'send'])->name('booking.wa');
