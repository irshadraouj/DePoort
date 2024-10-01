<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
        });

Route::get('/afspraak', function () {
    return view('afspraak');
        });

Route::get('/contact', function () {
    return view('contact');
        });
        
Route::get('/inloggen', function () {
    return view('inloggen');
        });

Route::post('/inloggen', [UserController::class, 'inlog']);

Route::get('/overons', function () {
    return view('overons');
        });

Route::get('/accountaanmaken', function () {
        return view('accountaanmaken');
        });