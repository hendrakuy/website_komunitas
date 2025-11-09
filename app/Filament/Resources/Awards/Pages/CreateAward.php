<?php

namespace App\Filament\Resources\Awards\Pages;

use App\Filament\Resources\Awards\AwardResource;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreateAward extends CreateRecord
{
    protected static string $resource = AwardResource::class;

    public function getTitle(): string
    {
        return 'Tambah Penghargaan';
    }

    public function getBreadcrumb(): string
    {
        return 'Tambah Penghargaan';
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->title('Penghargaan berhasil ditambahkan')
            ->success()
            ->send();
    }
}
