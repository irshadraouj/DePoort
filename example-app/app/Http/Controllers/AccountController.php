<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{

    public function datasubmit(Request $req)
    {
        //dd($req->all());
        $client = new Client;
        $client->naam = $req->naam;
        $client->tsv = $req->tsv;
        $client->achternaam = $req->achternaam;
        $client->adres = $req->adres;
        $client->postcode = $req->postcode;
        $client->woonplaats = $req->woonplaats;
        $client->land = $req->land;
        $client->telefoon = $req->telefoon;
        $client->wachtwoord = Hash::make($req->wachtwoord);
        $client->geslacht = $req->geslacht;
        $client->geboorte = $req->geboorte;
        $client->save();
    
        return redirect()->back();
    }

    public function login(Request $request)
{
    //dd($request->all());
    $inputPassword = $request->wachtwoord;
    
    // Zoek de gebruiker op via het telefoonnummer
    $client = Client::where('telefoon', $request->telefoon)->first();
    
    if ($client) {
        // Vergelijk het ingevoerde wachtwoord met het gehashte wachtwoord in de database
        if (Hash::check($inputPassword, $client->wachtwoord)) {
            // Wachtwoord komt overeen, log de gebruiker in
            Auth::guard('client')->login($client);
            return redirect()->intended('/');
        } else {
            // wnr wachtwoord niet overeen komt
            return back()->withErrors(['wachtwoord' => 'Het wachtwoord is onjuist.']);
        }
    } else {
        return back()->withErrors(['telefoon' => 'Geen gebruiker gevonden met dit telefoonnummer.']);
    }
    
}     
}