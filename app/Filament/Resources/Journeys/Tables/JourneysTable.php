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
                ImageColumn::make('iamge')
                    ->label('Gambar')
                    ->getStateUsing(fn($record) => $record->image ? asset('storage/' . $record->image) : null)
                    ->disk('public')
                    ->circular()
                    ->height(60)
                    ->width(60),

                TextColumn::make('year')
                    ->label('Tahun')
                    // ->sortable()
                    ->searchable(),

                TextColumn::make('title')
                    ->label('Judul'),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
