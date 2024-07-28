<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EmployeeHourController;
use App\Http\Controllers\PayoutController;
use Illuminate\Support\Facades\Route;

Route::post('employees/create', [EmployeeController::class, 'store'])->name('employees.store');
Route::post('employees/set-hours', [EmployeeHourController::class, 'store'])->name('employees_hours.store');
Route::get('employees/get-payout', [PayoutController::class, 'index'])->name('payout.index');
Route::get('employees/pay-out', [PayoutController::class, 'payOut'])->name('payout.pay-out');
