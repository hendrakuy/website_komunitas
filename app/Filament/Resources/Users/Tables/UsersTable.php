<?php

namespace App\Filament\Resources\Users\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Spatie\ImageOptimizer\Image;

class UsersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('photo')
                    ->label('Foto')
                    ->getStateUsing(fn($record) => $record->photo ? asset('storage/' . $record->photo) : null)
                    ->disk('public')
                    ->circular()
                    ->height(60)
                    ->width(60),

                TextColumn::make('name')
                    ->label('Nama')
                    ->searchable(),

                TextColumn::make('email')
                    ->label('Email address')
                    ->searchable(),

                TextColumn::make('role')
                    ->label('Role')
                    ->searchable(),
                TextColumn::make('email_verified_at')
                    ->label('Email Diverifikasi')
                    ->dateTime()
                    ->sortable(),
            ])
            ->recordActions([
                EditAction::make()
                    ->label('Edit'),
            ])
            ->toolbarActions([
                DeleteBulkAction::make()
                    ->label('Hapus Terpilih')
                    ->requiresConfirmation(true)
                    ->modalHeading('Hapus Pengguna Terpilih')
                    ->modalSubheading('Apakah Anda yakin ingin menghapus pengguna terpilih? Tindakan ini tidak dapat dibatalkan.')
                    ->modalButton('Ya, Hapus')
                    ->successNotificationTitle('Pengguna terpilih berhasil dihapus'),
            ]);
    }
}
