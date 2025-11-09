<?php

namespace App\Filament\Resources\Wisatas\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class WisatasTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Judul')
                    ->searchable(),

                TextColumn::make('address')
                    ->label('Alamat')
                    ->searchable(),

                TextColumn::make('lat')
                    ->label('Latitude')
                    ->numeric()
                    ->sortable(),

                TextColumn::make('lng')
                    ->label('Longitude')
                    ->numeric()
                    ->sortable(),

                ImageColumn::make('image')
                    ->label('Gambar')
                    ->getStateUsing(fn($record) => $record->image ? asset('storage/' . $record->image) : null)
                    ->disk('public')
                    ->circular()
                    ->height(60)
                    ->width(60)
                    ->visibility('public'),
            ])
            ->recordActions([
                EditAction::make()
                    ->label('Edit'),
            ])
            ->toolbarActions([
                DeleteBulkAction::make()
                    ->label('Hapus Wisata')
                    ->requiresConfirmation(true)
                    ->modalHeading('Hapus Wisata')
                    ->modalSubheading('Apakah Anda yakin ingin menghapus wisata ini? Tindakan ini tidak dapat dibatalkan.')
                    ->modalButton('Ya, Hapus')
                    ->successNotificationTitle('Wisata berhasil dihapus'),
            ]);
    }
}
