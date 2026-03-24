<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImcController;

Route::get('/', function () {
    return view('form');
});

Route::post('/imc', [ImcController::class, 'imc']);