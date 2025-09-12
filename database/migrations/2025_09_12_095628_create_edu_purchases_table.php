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
        Schema::create('edu_purchases', function (Blueprint $table) {
            $table->id();
            $table->foreignId('edupackage_id')->constrained()->cascadeOnDelete();
            $table->string('buyer_name');
            $table->string('phone');
            $table->text('message')->nullable();
            $table->enum('status', ['pending', 'contacted', 'confirmed', 'cancelled'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('edu_purchases');
    }
};
