<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenericsController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\ActionController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\UserController;

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

Route::get('/w', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/', [GenericsController::class, 'index'])->name("generics.home");
    Route::get('/dashboard', [GenericsController::class, 'index'])->name("generics.dashboard");

    Route::get('/customers/{status_id}', [CustomerController::class, 'index'])->name("customer.index");
    Route::get('/customer/show/{id}', [CustomerController::class, 'show'])->name("customer.show");
    Route::get('/customer/create', [CustomerController::class, 'create'])->name("customer.create");
    Route::post('/customer/store', [CustomerController::class, 'store'])->name("customer.store");
    Route::get('/customer/{id}/edit', [CustomerController::class, 'edit'])->name("customer.edit");
    Route::put('/customer/{id}/update', [CustomerController::class, 'update'])->name("customer.update");
    Route::delete('/customer/delete', [CustomerController::class, 'destroy'])->name("customer.destroy");

    Route::get('/customer/{id}/create/action', [ActionController::class, 'create'])->name("action.create");
    Route::post('/customer/{id}/store/action', [ActionController::class, 'store'])->name("action.store");

    Route::get('/customer/{id}/create/order', [OrderController::class, 'create'])->name("order.create");
    Route::post('/customer/{id}/store/order', [OrderController::class, 'store'])->name("order.store");

    Route::get('/businesses', [BusinessController::class, 'index'])->name("business.index");
    Route::get('/business/{id}', [BusinessController::class, 'show'])->name("business.show");
    Route::post('/business/create', [BusinessController::class, 'store'])->name("business.store");
    Route::get('/business/{id}/edit', [BusinessController::class, 'edit'])->name("business.edit");
    Route::put('/business/{id}/update', [BusinessController::class, 'update'])->name("business.update");
    Route::delete('/businesses', [BusinessController::class, 'destroy'])->name("business.destroy");

    Route::get('/account', [UserController::class, 'index'])->name("account.index");
    Route::post('/account/create', [UserController::class, 'store'])->name("account.store");
    Route::put('/account/{id}/update', [UserController::class, 'update'])->name("account.update");
    Route::get('/account/{id}/edit', [UserController::class, 'edit'])->name("account.edit");
    Route::delete('/account/{id}/delete', [UserController::class, 'destroy'])->name("account.destroy");


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/calendar', [CalendarController::class, 'index'])->name('calendar.index');

    Route::get('/export-customer', [CustomerController::class, 'exportCustomerToCsv'])->name("customer.export");

});

require __DIR__.'/auth.php';
