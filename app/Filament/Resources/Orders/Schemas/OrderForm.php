<?php

namespace App\Filament\Resources\Orders\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Form;
use Filament\Schemas\Schema;
use App\Models\Batik;
use Filament\Forms\Set;
use Filament\Forms\Get;

class OrderForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->schema([

            // ======================
            // INFORMASI ORDER
            // ======================
            TextInput::make('order_number')
                ->label('Nomor Order')
                ->disabled()
                ->dehydrated()
                ->default(
                    fn($record) =>
                    $record
                        ? 'ORDER-' . str_pad($record->id, 5, '0', STR_PAD_LEFT)
                        : 'Akan digenerate'
                )
                ->columnSpan(1),

            DatePicker::make('order_date')
                ->label('Tanggal Order')
                ->required()
                ->default(now())
                ->columnSpan(1),

            Select::make('status')
                ->label('Status Order')
                ->options([
                    'pending' => 'Pending',
                    'confirmed' => 'Confirmed',
                    'paid' => 'Paid',
                    'completed' => 'Completed',
                    'cancelled' => 'Cancelled',
                ])
                ->required()
                ->default('pending')
                ->columnSpan(1),

            // ======================
            // DATA CUSTOMER
            // ======================
            TextInput::make('name')
                ->label('Nama Customer')
                ->required()
                ->maxLength(255)
                ->columnSpan(1),

            TextInput::make('phone')
                ->label('No. WhatsApp')
                ->tel()
                ->required()
                ->maxLength(20)
                ->columnSpan(1),

            // ======================
            // PRODUK & KOMISI
            // ======================
            // TextInput::make('product_name')
            //     ->label('Nama Produk Batik')
            //     ->required()
            //     ->maxLength(255)
            //     ->columnSpanFull(),

            // TextInput::make('product_price')
            //     ->label('Harga Produk')
            //     ->numeric()
            //     ->required()
            //     ->prefix('Rp')
            //     ->step(1000)
            //     ->live(onBlur: true)
            //     ->afterStateUpdated(function ($state, $set, $get) {
            //         self::calculateTotals($set, $get);
            //     })
            //     ->columnSpan(1),

            Select::make('product_id')
                ->label('Pilih Produk Batik')
                ->options(Batik::pluck('title', 'id'))
                ->searchable()
                ->required()
                ->reactive()
                ->afterStateUpdated(function ($state, $set, $get) {
                    if ($state) {
                        $product = Batik::find($state);

                        // Set nama & harga otomatis
                        $set('product_name', $product->title);
                        $set('product_price', $product->price);

                        // Hitung ulang total dan komisi
                        OrderForm::calculateTotals($set, $get);
                    }
                })
                ->columnSpan(2),

            TextInput::make('product_name')
                ->label('Nama Produk')
                ->disabled()
                ->dehydrated()
                ->columnSpan(1),

            TextInput::make('product_price')
                ->label('Harga Produk')
                ->numeric()
                ->prefix('Rp')
                ->disabled()
                ->dehydrated()
                ->columnSpan(1),

            TextInput::make('quantity')
                ->label('Jumlah')
                ->numeric()
                ->required()
                ->default(1)
                ->minValue(1)
                ->live(onBlur: true)
                ->afterStateUpdated(function ($state, $set, $get) {
                    self::calculateTotals($set, $get);
                })
                ->columnSpan(1),

            TextInput::make('total_amount')
                ->label('Total Amount')
                ->numeric()
                ->prefix('Rp')
                ->disabled()
                ->dehydrated()
                ->columnSpan(1),

            TextInput::make('commission_rate')
                ->label('Rate Komisi (%)')
                ->numeric()
                ->required()
                ->default(5)
                ->suffix('%')
                ->minValue(0)
                ->maxValue(100)
                ->live(onBlur: true)
                ->afterStateUpdated(function ($state, $set, $get) {
                    self::calculateTotals($set, $get);
                })
                ->columnSpan(1),

            TextInput::make('commission')
                ->label('Komisi Anda')
                ->numeric()
                ->prefix('Rp')
                ->disabled()
                ->dehydrated()
                ->columnSpan(1),

            // ======================
            // PEMBAYARAN
            // ======================
            Select::make('payment_method')
                ->label('Metode Pembayaran')
                ->options([
                    'transfer' => 'Transfer Bank',
                    'qris' => 'QRIS',
                    'cod' => 'COD',
                    'ewallet' => 'E-Wallet',
                    'tunai' => 'Tunai',
                ])
                ->columnSpan(1),

            Textarea::make('note')
                ->label('Catatan')
                ->rows(3)
                ->columnSpanFull(),

        ])->columns(3);
    }

    private static function calculateTotals($set, $get): void
    {
        $price = (float) ($get('product_price') ?? 0);
        $quantity = (int) ($get('quantity') ?? 1);
        $commissionRate = (float) ($get('commission_rate') ?? 5);

        $total = $price * $quantity;
        $commission = $total * ($commissionRate / 100);

        $set('total_amount', $total);
        $set('commission', $commission);
    }
}
