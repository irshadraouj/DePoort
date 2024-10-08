<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Client;

class AccountController extends Controller
{
    public function datasubmit(Request $req)
    {
        $client = new Client;
        $client->naam = $req->naam;
        $client->tsv = $req->tsv;
        $client->achternaam = $req->achternaam;
        $client->adres = $req->adres;
        $client->postcode = $req->postcode;
        $client->woonplaats = $req->woonplaats;
        $client->land = $req->land;
        $client->telefoon = $req->telefoon;
        $client->geslacht = $req->geslacht;
        $client->geboorte = $req->geboorte;
        $client->save();
    }
}
