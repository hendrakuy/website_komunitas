<?php

namespace App\Filament\Resources\Batiks\Tables;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;


class BatiksTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                // Kolom gambar
                ImageColumn::make('image')
                    ->label('Foto')
                    ->getStateUsing(fn($record) => $record->image ? asset('storage/' . $record->image) : null)
                    ->disk('public')
                    ->circular()
                    ->height(60)
                    ->width(60),

                // Nama Batik
                TextColumn::make('title')
                    ->label('Nama Batik')
                    ->searchable()
                    ->sortable()
                    ->limit(30),

                // Relasi kategori
                TextColumn::make('category.name')
                    ->label('Kategori')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Premium' => 'success',
                        'Standard' => 'primary',
                        default => 'gray',
                    }),

                // Relasi UMKM
                TextColumn::make('umkm.name')
                    ->label('UMKM')
                    ->toggleable()
                    ->searchable(),

                // Relasi user (pembuat)
                TextColumn::make('user.name')
                    ->label('Dibuat Oleh')
                    ->toggleable(),

                // Harga
                TextColumn::make('price')
                    ->label('Harga')
                    ->money('IDR', locale: 'id')
                    ->sortable(),
            ])
            ->recordActions([
                EditAction::make()
                    ->label('Edit'),
            ])
            ->toolbarActions([
                DeleteBulkAction::make()
                    ->label('Hapus Produk')
                    ->requiresConfirmation(true)
                    ->modalHeading('Hapus Produk Batik')
                    ->modalSubheading('Apakah Anda yakin ingin menghapus produk batik yang dipilih? Tindakan ini tidak dapat dibatalkan.')
                    ->successNotificationTitle('Produk Batik berhasil dihapus'),
                    // ->successNotificationBody('Produk Batik berhasil dihapus.')
                // RestoreBulkAction::make()->label('Pulihkan'),
                // ForceDeleteBulkAction::make()->label('Hapus Permanen'),
            ]);
    }
}
