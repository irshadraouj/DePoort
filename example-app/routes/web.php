<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController; // Voeg deze regel toe

Route::get('/', function () {
    return view('welcome');
});

Route::post('/submit-data', [AccountController::class, 'datasubmit']);
