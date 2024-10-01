<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function store(Request $request)
    {
        // Validate de request
        $validatedData = $request->validate([
            'naam' => 'required|string|max:100',
            'tsv' => 'nullable|string|max:50',
            'achternaam' => 'required|string|max:100',
            'adres' => 'required|string|max:255',
            'postcode' => 'required|string|max:20',
            'plaats' => 'required|string|max:100',
            'telefoon' => 'required|string|max:20',
            'geslacht' => 'nullable|string|max:20',
            'geboorte' => 'required|date_format:d-m-Y',
        ]);

        // User::create($validatedData);

        return redirect()->back()->with('success', 'Account aangemaakt!');
    }
}
    
