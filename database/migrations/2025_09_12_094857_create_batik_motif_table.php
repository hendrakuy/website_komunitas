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
        Schema::create('batik_motif', function (Blueprint $table) {
            $table->foreignId('batik_id')->constrained()->cascadeOnDelete();
            $table->foreignId('motif_id')->constrained()->cascadeOnDelete();
            $table->primary(['batik_id', 'motif_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('batik_motif');
    }
};
