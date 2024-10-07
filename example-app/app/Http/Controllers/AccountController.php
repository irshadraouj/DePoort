<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class AccountController extends Controller
{
    public function datasubmit(Request $req)
    {
        // Valideer de gegevens
        $validatedData = $req->validate([
            'naam' => 'required|string|max:255',
            'tsv' => 'required|string|max:255',
            'achternaam' => 'required|string|max:255',
            'adres' => 'required|string|max:255',
            'postcode' => 'required|string|max:255',
            'woonplaats' => 'required|string|max:255',
            'land' => 'required|string|max:255',
            'telefoon' => 'required|string|max:255',
            'geslacht' => 'required|string|max:255',
            'geboorte' => 'required|date',
        ]);

        // Maak een nieuw client-model aan
        $client = new Client;

        // Vul het model met de gegevens
        $client->naam = $req->input('naam');
        $client->tsv = $req->input('tsv');
        $client->achternaam = $req->input('achternaam');
        $client->adres = $req->input('adres');
        $client->postcode = $req->input('postcode');
        $client->woonplaats = $req->input('woonplaats');
        $client->land = $req->input('land');
        $client->telefoon = $req->input('telefoon');
        $client->geslacht = $req->input('geslacht');
        $client->geboorte = $req->input('geboorte');

        // Sla het client op in de database
        $client->save();

        return response()->json(['message' => 'Client opgeslagen!']);
    }
}

