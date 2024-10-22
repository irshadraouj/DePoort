<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client', function (Blueprint $table) {
            $table->id();
            $table->string('naam');
            $table->string('tsv')->nullable();
            $table->string('achternaam');
            $table->string('adres');
            $table->string('postcode');
            $table->string('woonplaats');
            $table->string('land');
            $table->string('telefoon');
            $table->string('wachtwoord');
            $table->string('geslacht');
            $table->date('geboorte');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
}
