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
        Membuat table entity untuk menampung data entity contoh
        [1] entity: "Kota"
        [2] entity: "Sekolah"
        [3] entity: "Siswa"
        */

        Schema::create('entity', function (Blueprint $table) {
            $table->id('id_entity');
            $table->string('name')->unique()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entity');
    }
};
