<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

Schema::create('users', function (Blueprint $table) {
    $table->id();
    $table->string('naam');
    $table->string('tsv');
    $table->string('achternaam');
    $table->string('adres');
    $table->string('postcode');
    $table->string('woonplaats');
    $table->string('land');
    $table->string('telefoon');
    $table->date('geboorte');
    $table->string('geslacht');
    $table->timestamps();
});