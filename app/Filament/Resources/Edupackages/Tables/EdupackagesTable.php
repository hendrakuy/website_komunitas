<?php

namespace App\Filament\Resources\Edupackages\Tables;

use Dom\Text;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class EdupackagesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Nama Paket')
                    ->searchable(),
                TextColumn::make('slug')
                    ->label('Slug')
                    ->searchable(),
                TextColumn::make('price')
                    ->label('Harga')
                    ->money('IDR', locale: 'id')
                    ->sortable(),
                TextColumn::make('kapasitas')
                    ->label('Kapasitas')
                    ->formatStateUsing(fn($state) => $state ? "{$state} orang" : '-')
                    ->sortable(),
                TextColumn::make('whatsapp_link')
                    ->label('Link WhatsApp')
                    ->searchable(),
                ImageColumn::make('image')
                    ->label('Gambar Paket')
                    ->getStateUsing(fn($record) => $record->image ? asset('storage/' . $record->image) : null),
                IconColumn::make('is_active')
                    ->label('Aktif')
                    ->boolean(),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                DeleteBulkAction::make()
                    ->label('Hapus Paket')
                    ->color('danger')
                    ->icon('heroicon-o-trash')
                    ->requiresConfirmation(true)
                    ->modalHeading('Hapus Paket Edukasi')
                    ->modalSubheading('Apakah Anda yakin ingin menghapus paket edukasi yang dipilih? Tindakan ini tidak dapat dibatalkan.')
                    ->modalButton('Hapus')
                    ->successNotificationTitle('Paket Edukasi berhasil dihapus'),
            ]);
    }
}
