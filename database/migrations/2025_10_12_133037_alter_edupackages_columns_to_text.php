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
        Schema::table('edupackages', function (Blueprint $table) {
            // Ubah tipe kolom dari JSON ke TEXT
            $table->text('materials')->nullable()->change();
            $table->text('facilities')->nullable()->change();
            $table->text('schedule_info')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('edupakages', function (Blueprint $table) {
            // Kembalikan ke JSON jika rollback
            $table->json('materials')->nullable()->change();
            $table->json('facilities')->nullable()->change();
            $table->json('schedule_info')->nullable()->change();
        });
    }
};
