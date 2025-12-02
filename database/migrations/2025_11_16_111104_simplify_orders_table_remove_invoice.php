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
        Schema::table('orders', function (Blueprint $table) {
            // Hapus kolom invoice
            $table->dropColumn(['invoice_code', 'invoice_path']);
            
            // Tambah kolom untuk komisi dan produk
            $table->decimal('commission', 12, 2)->default(0)->after('total_amount');
            $table->decimal('commission_rate', 5, 2)->default(5)->after('commission');
            $table->string('product_name')->nullable()->after('phone');
            $table->decimal('product_price', 12, 2)->default(0)->after('product_name');
            $table->integer('quantity')->default(1)->after('product_price');
            $table->date('order_date')->nullable()->after('note');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->string('invoice_code')->unique()->nullable();
            $table->string('invoice_path')->nullable();
            
            $table->dropColumn([
                'commission',
                'commission_rate',
                'product_name', 
                'product_price',
                'quantity',
                'order_date'
            ]);
        });
    }
};
