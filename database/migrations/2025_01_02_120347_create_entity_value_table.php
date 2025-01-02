<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        /*
        Membuat table entity_value untuk menampung data entity contoh 
        dari entity Siswa
        [1] entity: "Siswa" value: "Adi Aulia Rahman"
        [2] entity: "Siswa" value: "Hendy Nur Sholeh"
        [3] entity: "Siswa" value: "Nurul Huda"
        */

        Schema::create('entity_value', function (Blueprint $table) {
            $table->id('id_entity_value');
            $table->unsignedBigInteger('id_entity');
            $table->foreign('id_entity')->references('id_entity')->on('entity')->onDelete('cascade');
            $table->string('value')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entity_value');
    }
};
