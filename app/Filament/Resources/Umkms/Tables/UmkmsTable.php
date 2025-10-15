<?php

namespace App\Filament\Resources\Umkms\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class UmkmsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('logo')
                    ->label('Logo UMKM')
                    ->getStateUsing(fn($record) => $record->logo ? asset('storage/' . $record->logo) : null)
                    ->circular()
                    ->height(50)
                    ->width(50),

                ImageColumn::make('background_image')
                    ->label('Gambar Latar')
                    ->getStateUsing(fn($record) => $record->background_image ? asset('storage/' . $record->background_image) : null)
                    ->circular()
                    ->height(50)
                    ->width(70),

                TextColumn::make('name')
                    ->label('Nama UMKM')
                    ->searchable(),

                TextColumn::make('owner')
                    ->label('Pemilik')
                    ->searchable(),

                TextColumn::make('phone')
                    ->label('No. Telepon')
                    ->searchable(),

                TextColumn::make('address')
                    ->label('Alamat')
                    ->searchable(),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                DeleteBulkAction::make()
                    ->label('Hapus UMKM')
                    ->requiresConfirmation(true)
                    ->modalHeading('Hapus Data UMKM')
                    ->modalSubheading('Apakah Anda yakin ingin menghapus data UMKM terpilih? Tindakan ini tidak dapat dibatalkan.')
                    ->modalButton('Ya, Hapus')
                    ->successNotificationTitle('Data UMKM berhasil dihapus')
                    ->deselectRecordsAfterCompletion(),
            ]);
    }
}
