<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
<<<<<<< Updated upstream
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
=======
});
use App\Http\Controllers\FormController;

Route::post('/submit', [FormController::class, 'store']);
>>>>>>> Stashed changes
