<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function store(Request $request)
    {
        // Validatie kan worden toegevoegd indien gewenst

        // Voeg gegevens toe aan de database
        DB::table('client')->insert([
            'naam' => $request->input('naam'),
            'tsv' => $request->input('tsv'),
            'achternaam' => $request->input('achternaam'),
            'adres' => $request->input('adres'),
            'postcode' => $request->input('postcode'),
            'telefoon' => $request->input('telefoon'),
            'geslacht' => $request->input('geslacht'),
            'geboorte' => $request->input('geboorte'),
        ]);

        return redirect()->back()->with('success', 'Client succesvol toegevoegd!');
    }
}
