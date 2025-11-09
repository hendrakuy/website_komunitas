<?php

namespace App\Filament\Resources\Wisatas\Pages;

use App\Filament\Resources\Wisatas\WisataResource;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Contracts\Support\Htmlable;

class CreateWisata extends CreateRecord
{
    protected static string $resource = WisataResource::class;

    public function getTitle(): string|Htmlable
    {
        return 'Tambah Data Wisata';
    }

    public function getBreadcrumb(): string
    {
        return 'Tambah Data Wisata';
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    public function getCreateNotification(): ?Notification
    {
        return Notification::make()
            ->title('Data wisata berhasil ditambahkan')
            ->success()
            ->send();
    }
}
