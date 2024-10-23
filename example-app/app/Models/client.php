<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Client extends Authenticatable
{
    
    use HasFactory;

    protected $table = 'client'; 

    protected $fillable = [
        'naam', 'tsv', 'achternaam', 'adres', 'postcode', 'woonplaats', 'land', 'telefoon', 'wachtwoord', 'geslacht', 'geboorte'
    ];

    public $timestamps = false; 

    protected $hidden = [
        'wachtwoord', // Verberg het wachtwoord
    ];
}

