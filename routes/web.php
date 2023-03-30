<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenericsController;
use App\Http\Controllers\CustomerController;

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

Route::middleware('auth')->group(function () {
    Route::get('/', [GenericsController::class, 'index'])->name("generics.dashboard");
    Route::get('/dashboard', [GenericsController::class, 'index'])->name("generics.dashboard");

    Route::get('/customers', [CustomerController::class, 'index'])->name("customer.index");
    Route::get('/customer/{id}', [CustomerController::class, 'show'])->name("customer.show");
    Route::get('/customer/create', [CustomerController::class, 'create'])->name("customer.create");
    Route::post('/customer/create', [CustomerController::class, 'store'])->name("customer.store");
    Route::get('/customer/{id}/edit', [CustomerController::class, 'edit'])->name("customer.edit");
    Route::put('/customer/{id}/update', [CustomerController::class, 'update'])->name("customer.update");
    Route::delete('/customers', [CustomerController::class, 'destroy'])->name("customer.destroy");

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';