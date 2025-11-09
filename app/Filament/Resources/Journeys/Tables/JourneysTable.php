<?php

namespace App\Filament\Resources\Journeys\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class JourneysTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->label('Gambar')
                    ->getStateUsing(fn($record) => $record->image ? asset('storage/' . $record->image) : null)
                    ->disk('public')
                    ->circular()
                    ->height(60)
                    ->width(60),

                TextColumn::make('year')
                    ->label('Tahun')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('title')
                    ->label('Judul'),

                TextColumn::make('content')
                    ->label('Deskripsi')
                    ->limit(50),
            ])
            ->recordActions([
                EditAction::make()
                    ->label('Edit'),
            ])
            ->toolbarActions([
                DeleteBulkAction::make()
                    ->label('Hapus Perjalanan')
                    ->requiresConfirmation(true)
                    ->modalHeading('Hapus Perjalanan')
                    ->modalSubheading('Apakah Anda yakin ingin menghapus perjalanan ini? Tindakan ini tidak dapat dibatalkan.')
                    ->modalButton('Ya, Hapus')
                    ->successNotificationTitle('Perjalanan berhasil dihapus'),
            ]);
    }
}
