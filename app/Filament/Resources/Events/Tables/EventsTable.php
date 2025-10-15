<?php

namespace App\Filament\Resources\Events\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;

class EventsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->label('Poster')
                    ->getStateUsing(fn($record) => $record->image ? asset('storage/' . $record->image) : null)
                    ->disk('public')
                    ->height(60)
                    ->width(60)
                    ->circular(),

                TextColumn::make('title')
                    ->label('Judul')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('start_at')
                    ->label('Mulai')
                    ->dateTime('d M Y')
                    ->sortable(),

                TextColumn::make('end_at')
                    ->label('Berakhir')
                    ->dateTime('d M Y')
                    ->sortable(),

                IconColumn::make('is_promo')
                    ->label('Promosi')
                    ->boolean()
                    ->trueIcon('heroicon-o-bolt')
                    ->falseIcon('heroicon-o-calendar')
                    ->color(fn($state) => $state ? 'warning' : 'gray'),
            ])
            // ->filters([
            //     Tables\Filters\TernaryFilter::make('is_promo')
            //         ->label('Hanya Promosi')
            //         ->placeholder('Semua')
            //         ->trueLabel('Promosi')
            //         ->falseLabel('Event Biasa'),

            //     Tables\Filters\Filter::make('aktif')
            //         ->label('Sedang Aktif')
            //         ->query(
            //             fn($query) =>
            //             $query->where('start_at', '<=', now())
            //                 ->where('end_at', '>=', now())
            //         ),
            // ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                DeleteBulkAction::make()
                    ->label('Hapus Event')
                    ->requiresConfirmation(true)
                    ->color('danger')
                    ->icon('heroicon-o-trash')
                    ->deselectRecordsAfterCompletion()
                    ->modalHeading('Hapus Event')
                    ->modalSubheading('Apakah Anda yakin ingin menghapus event yang dipilih? Tindakan ini tidak dapat dibatalkan.')
                    ->modalButton('Ya, Hapus')
                    ->successNotificationTitle('Event Berhasil Dihapus'),
            ]);
    }
}
