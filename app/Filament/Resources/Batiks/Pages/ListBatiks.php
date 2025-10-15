<?php

namespace App\Filament\Resources\Batiks\Pages;

use App\Filament\Resources\Batiks\BatikResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListBatiks extends ListRecords
{
    protected static string $resource = BatikResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make('create')
                ->label('Tambah Batik')
                ->icon('heroicon-o-plus')
                ->url(static::getResource()::getUrl('create')),
        ];
    }
}
