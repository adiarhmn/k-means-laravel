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
        Membuat table attribute untuk menampung data attribute contoh
        dari attribute siswa
        [1]  entity: "Siswa" attribute: "UTS"
        [2]  entity: "Siswa" attribute: "UAS"
        */

        Schema::create('attribute', function (Blueprint $table) {
            $table->id('id_attribute');
            $table->unsignedBigInteger('id_entity');
            $table->foreign('id_entity')->references('id_entity')->on('entity')->onDelete('cascade');
            $table->string('name')->unique()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attribute');
    }
};
