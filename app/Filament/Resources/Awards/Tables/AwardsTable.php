<?php

namespace App\Filament\Resources\Awards\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class AwardsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Judul Penghargaan')
                    ->searchable(),
                TextColumn::make('video_url')
                    ->label('URL Video')
                    ->searchable(),
                TextColumn::make('description')
                    ->label('Deskripsi')
                    ->limit(50)
                    ->toggleable(),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                DeleteBulkAction::make()
                    ->label('Hapus Penghargaan')
                    ->color('danger')
                    ->icon('heroicon-o-trash')
                    ->requiresConfirmation(true)
                    ->modalHeading('Hapus Penghargaan')
                    ->modalSubheading('Apakah Anda yakin ingin menghapus penghargaan ini? Tindakan ini tidak dapat dibatalkan.')
                    ->modalButton('Ya, Hapus')
                    ->successNotificationTitle('Penghargaan berhasil dihapus'),
            ]);
    }
}
