<?php

namespace App\Filament\Resources\Umkms\Pages;

use App\Filament\Resources\Umkms\UmkmResource;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Contracts\Support\Htmlable;
use Filament\Actions;

class CreateUmkm extends CreateRecord
{
    protected static string $resource = UmkmResource::class;

    public function getTitle(): string|Htmlable
    {
        return 'Tambah Data UMKM';
    }

    public function getBreadcrumb(): string
    {
        return 'Tambah Data UMKM';
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->title('Data UMKM berhasil ditambahkan')
            ->success()
            ->send();
    }
}
