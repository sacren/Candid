<?php

use App\Http\Controllers\FieldController;
use App\Http\Controllers\ToasterController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/transactions', [TransactionController::class, 'index']);

Route::get('/toasters', [ToasterController::class, 'index']);

Route::get('fields', [
    FieldController::class, 'index'
])->name('fields.index');
