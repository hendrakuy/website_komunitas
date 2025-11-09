<?php

namespace App\Filament\Resources\Orders\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Filament\Forms;

class OrderForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(2)
            ->schema([
                Forms\Components\TextInput::make('invoice_code')
                    ->label('Kode Invoice')
                    ->disabled() // tidak bisa diedit
                    ->dehydrated(false) // biar tidak dikirim saat create manual
                    ->helperText('Dibuat otomatis oleh sistem saat order baru.'),

                Forms\Components\TextInput::make('name')
                    ->label('Nama Pembeli')
                    ->placeholder('Nama pembeli (opsional)'),

                Forms\Components\TextInput::make('phone')
                    ->label('Nomor WhatsApp')
                    ->tel()
                    ->placeholder('contoh: 081234567890'),

                Forms\Components\TextInput::make('total_amount')
                    ->label('Total Harga (Rp)')
                    ->numeric()
                    ->prefix('Rp')
                    ->required(),

                Forms\Components\Select::make('status')
                    ->label('Status Pesanan')
                    ->options([
                        'pending' => 'Pending',
                        'paid' => 'Sudah Dibayar',
                        'cancelled' => 'Dibatalkan',
                    ])
                    ->default('pending')
                    ->required(),

                Forms\Components\Select::make('payment_method')
                    ->label('Metode Pembayaran')
                    ->options([
                        'transfer' => 'Transfer Bank',
                        'qris' => 'QRIS',
                        'cod' => 'COD (Bayar di Tempat)',
                    ])
                    ->placeholder('Pilih metode pembayaran'),

                Forms\Components\Textarea::make('note')
                    ->label('Catatan Tambahan')
                    ->rows(3)
                    ->columnSpanFull(),
            ]);
    }
}
