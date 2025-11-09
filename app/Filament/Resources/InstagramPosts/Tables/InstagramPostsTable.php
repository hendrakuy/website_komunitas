<?php

namespace App\Filament\Resources\InstagramPosts\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use FIlament\Tables;
use FIlament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;

class InstagramPostsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->label('Gambar')
                    ->getStateUsing(fn($record) => $record->image ? asset('storage/' . $record->image) : null)
                    ->disk('public')
                    ->height(60)
                    ->width(60)
                    ->circular(),

                TextColumn::make('caption')
                    ->label('Caption')
                    ->limit(50)
                    ->searchable()
                    ->sortable(),

                TextColumn::make('link')
                    ->label('Link Instagram')
                    ->limit(50)
                    ->searchable()
                    ->sortable(),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                DeleteBulkAction::make()
                    ->label('Hapus Postingan')
                    ->color('danger')
                    ->icon('heroicon-o-trash')
                    ->requiresConfirmation(true)
                    ->modalHeading('Hapus Postingan Instagram')
                    ->modalSubheading('Apakah Anda yakin ingin menghapus postingan Instagram yang dipilih? Tindakan ini tidak dapat dibatalkan.')
                    ->modalButton('Ya, Hapus')
                    ->successNotificationTitle('Postingan Instagram berhasil dihapus'),
            ]);
    }
}
