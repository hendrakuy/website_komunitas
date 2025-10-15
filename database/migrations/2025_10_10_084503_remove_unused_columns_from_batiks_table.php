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
        Schema::table('batiks', function (Blueprint $table) {
            $table->dropColumn(['sku', 'quality', 'gender', 'stock']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('batiks', function (Blueprint $table) {
            // kalau perlu kembalikan kolom yang dihapus
            $table->string('sku')->nullable();
            $table->string('quality')->nullable();
            $table->string('gender')->nullable();
            $table->integer('stock')->nullable();
        });
    }
};
