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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_code')->unique(); // Contoh: INV-20251018-001
            $table->string('name')->nullable(); // Nama pembeli
            $table->string('phone')->nullable(); // Nomor WA pembeli
            $table->decimal('total_amount', 12, 2)->default(0); // Total harga
            $table->enum('status', ['pending', 'paid', 'cancelled'])->default('pending'); // Status
            $table->string('payment_method')->nullable(); // Transfer / QRIS / COD
            $table->text('note')->nullable(); // Catatan tambahan opsional
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
