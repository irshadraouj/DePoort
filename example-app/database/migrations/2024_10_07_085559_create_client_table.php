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
            $table->string('naam');
            $table->string('tsv');
            $table->string('achternaam');
            $table->string('adres');
            $table->string('postcode');
            $table->string('woonplaats');
            $table->string('land');
            $table->string('telefoon');
            $table->string('geslacht');
            $table->date('geboorte');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client');
    }
}
