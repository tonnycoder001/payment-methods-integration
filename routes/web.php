<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaypalController;

Route::get('/', function () {
    return view('welcome');
});

// Paypal
Route::post('paypal', [PaypalController::class, 'payment'])->name('paypal');
Route::get('paypal.success', [PaypalController::class, 'success'])->name('paypal_success');
Route::get('paypal.cancel', [PaypalController::class, 'cancel'])->name('paypal_cancel');
