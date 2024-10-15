<?php
use illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\AuthController;
use App\Models\Client;


Route::get('/', function () {
    return view('welcome');
});
 
Route::post('/submit-data', [AccountController::class, 'datasubmit']);

Route::post('/inloggen', [AccountController::class, 'login']);

Route::get('/afspraak', function () {
    return view('afspraak');
        });

Route::get('/contact', function () {
    return view('contact');
        });
        
Route::get('/inloggen', function () {
    return view('inloggen');
        });

Route::get('/overons', function () {
    return view('overons');
        });

Route::get('/accountaanmaken', function () {
        return view('accountaanmaken');
        });