<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\Log;

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
    
        $client->save();
        try {
            $client->save();
            return response()->json(['message' => 'Client opgeslagen!']);
        } catch (\Exception $e) {
            Log::error('Opslaan in de database is mislukt: ' . $e->getMessage());
            return response()->json(['message' => 'Er is een fout opgetreden.'], 500);
        }
    }
}        