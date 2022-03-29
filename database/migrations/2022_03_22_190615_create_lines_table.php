<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lines', function (Blueprint $table) {
            $table->id();
            $table->date('datainiziale');
            $table->date('datafinale');
            $table->double('costo');
            $table->boolean('confermarigha');
            $table->foreignId('id_prenotazione')->constrained('reservations','id');
            $table->foreignId('id_appartamento')->constrained('apartments','id');
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
        Schema::dropIfExists('lines');
    }
};
