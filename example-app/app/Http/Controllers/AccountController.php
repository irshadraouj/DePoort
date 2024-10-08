<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Client;

class AccountController extends Controller
{
    public function datasubmit(Request $req)
    {
        $validatedData = $req->validate([
            'naam' => 'required|string|max:255',
            'tsv' => 'required|string|max:255',
            'achternaam' => 'required|string|max:255',
            'adres' => 'required|string|max:255',
            'postcode' => 'required|string|max:255',
            'woonplaats' => 'required|string|max:255',
            'land' => 'required|string|max:255',
            'telefoon' => 'required|string|max:15|regex:/^\+?[0-9]*$/',
            'geslacht' => 'required|string|max:255',
            'geboorte' => 'required|date',
        ]);
    
        // Maak een nieuw client-model en slaat op
        Client::create($validatedData);
    }
}
