<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\ImcController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', [ImcController::class, 'form']);

Route::post('/imc', [ImcController::class, 'imc']);