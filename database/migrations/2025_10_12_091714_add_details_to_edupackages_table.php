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
            // Kolom tambahan
            $table->json('materials')->nullable()->after('description');   // Materi yang dipelajari
            $table->json('facilities')->nullable()->after('materials');    // Fasilitas yang didapat
            $table->json('schedule_info')->nullable()->after('facilities'); // Info pelaksanaan

            $table->string('whatsapp_link')->nullable()->after('price');   // Link langsung ke WA
            $table->string('image')->nullable()->after('whatsapp_link');   // Gambar paket
            $table->boolean('is_active')->default(true)->after('image'); // Status aktif atau tidak
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('edupackages', function (Blueprint $table) {
            $table->dropColumn([
                'materials',
                'facilities',
                'schedule_info',
                'whatsapp_link',
                'image',
                'is_active',
            ]);
        });
    }
};
