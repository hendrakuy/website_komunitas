<?php

namespace App\Filament\Resources\Awards\Pages;

use App\Filament\Resources\Awards\AwardResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAwards extends ListRecords
{
    protected static string $resource = AwardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make('create')
                ->label('Tambah Penghargaan')
                ->icon('heroicon-o-plus')
                ->url(static::getResource()::getUrl('create')),
        ];
    }
}
