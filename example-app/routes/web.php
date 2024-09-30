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

Route::get('/overons', function () {
    return view('overons');
        });
