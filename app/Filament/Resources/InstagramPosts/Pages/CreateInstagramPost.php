<?php

namespace App\Filament\Resources\InstagramPosts\Pages;

use App\Filament\Resources\InstagramPosts\InstagramPostResource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;

class CreateInstagramPost extends CreateRecord
{
    protected static string $resource = InstagramPostResource::class;

    public function getTitle(): string
    {
        return 'Tambah Konten Instagram';
    }

    public function getBreadcrumb(): string
    {
        return 'Tambah Konten Instagram';
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->title('Konten Instagram Berhasil Ditambahkan')
            ->success()
            ->send();
    }
}
