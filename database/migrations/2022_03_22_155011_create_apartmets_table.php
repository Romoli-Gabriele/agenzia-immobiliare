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
        Schema::create('apartments', function (Blueprint $table) {
            $table->id();
            $table->string('indirizzo');
            $table->integer('prezzogiorno');
            $table->integer('numerocamere');
            $table->integer('postiletto');
            $table->boolean('usocucina');
            $table->boolean('parcheggio');
            $table->foreignId('id_quartiere')->constrained('neighborhoods', 'id')->onDelete('cascade');
            $table->foreignId('id_proprietario')->constrained('users', 'id')->onDelete('cascade');;
            $table->text('note');
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
        Schema::dropIfExists('apartments');
    }
};
