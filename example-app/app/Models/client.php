<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    
    use HasFactory;

    protected $table = 'client'; 

    protected $fillable = [
        'naam', 'tsv', 'achternaam', 'adres', 'postcode', 'woonplaats', 'land', 'telefoon', 'geslacht', 'geboorte'
    ];

    public $timestamps = false; 
}

