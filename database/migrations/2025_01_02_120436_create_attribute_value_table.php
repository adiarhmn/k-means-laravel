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
        Membuat table attribute_value untuk menampung data attribute contoh
        dari attribute siswa dan entity siswa
        [1] entity_value: "Adi Aulia Rahman" attribute: "UTS" value: "80"
        [2] entity_value: "Adi Aulia Rahman" attribute: "UAS" value: "90"
        [3] entity_value: "Hendy Nur Sholeh" attribute: "UTS" value: "70"
        [4] entity_value: "Hendy Nur Sholeh" attribute: "UAS" value: "80"
        [5] entity_value: "Nurul Huda" attribute: "UTS" value: "90"
        [6] entity_value: "Nurul Huda" attribute: "UAS" value: "80"
        */

        Schema::create('attribute_value', function (Blueprint $table) {
            $table->id('id_attribute_value');
            $table->unsignedBigInteger('id_attribute');
            $table->foreign('id_attribute')->references('id_attribute')->on('attribute')->onDelete('cascade');
            $table->unsignedBigInteger('id_entity_value');
            $table->foreign('id_entity_value')->references('id_entity_value')->on('entity_value')->onDelete('cascade');
            $table->string('value')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attribute_value');
    }
};
