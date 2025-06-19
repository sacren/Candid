<?php

use App\Http\Controllers\BillingController;
use App\Http\Controllers\DebtController;
use App\Http\Controllers\FieldController;
use App\Http\Controllers\ToasterController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/transactions', [TransactionController::class, 'index']);

Route::get('/toasters', [ToasterController::class, 'index']);

Route::resource('fields', FieldController::class)
    ->only(['index', 'show']);

Route::resource('debts', DebtController::class)
    ->only('index');

Route::resource('billings', BillingController::class)
    ->only('index');
