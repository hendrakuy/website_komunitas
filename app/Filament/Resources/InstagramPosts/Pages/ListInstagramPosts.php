<?php

namespace App\Filament\Resources\InstagramPosts\Pages;

use App\Filament\Resources\InstagramPosts\InstagramPostResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListInstagramPosts extends ListRecords
{
    protected static string $resource = InstagramPostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make('create')
                ->label('Tambah Konten Instagram')
                ->icon('heroicon-o-plus')
                ->url(static::getResource()::getUrl('create')),
        ];
    }
}
