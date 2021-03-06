<?php

use Illuminate\Support\Facades\Route;


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

Route::get('/', [App\Http\Controllers\FrontendController::class, 'index']);

// patient appointment
Route::get('/new-appointment/{doctorId}/{date}', [App\Http\Controllers\FrontendController::class, 'show'])->name('create.appointment');

Route::post('/book/appointment', [App\Http\Controllers\FrontendController::class, 'store'])->name('booking.appointment')->middleware('auth');

Route::get('/my-booking', [App\Http\Controllers\FrontendController::class, 'myBookings'])->name('my.booking')->middleware('auth');




Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// admin
Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::resource('doctor', 'DoctorController');

});

// doctor
Route::group(['middleware' => ['auth', 'doctor']], function () {
    Route::resource('appointment', 'AppointmentController');
    Route::post('/appointment/check', [App\Http\Controllers\AppointmentController::class, 'check'])->name('appointment.check');
    Route::post('/appointment/update', [App\Http\Controllers\AppointmentController::class, 'updateTime'])->name('update');
});

// nurse
Route::group(['middleware' => ['auth', 'nurse']], function () {
            
});

// testdoctor
Route::group(['middleware' => ['auth', 'testdoctor']], function () {
    
});

