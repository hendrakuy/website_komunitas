<?php

namespace App\Filament\Resources\Events\Pages;

use App\Filament\Resources\Events\EventResource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Actions;
use Filament\Notifications\Notification;

class CreateEvent extends CreateRecord
{
    protected static string $resource = EventResource::class;

    public function getTitle(): string
    {
        return 'Buat Event';
    }

    public function getBreadcrumb(): string
    {
        return 'Buat Event';
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    // Tampilkan notifikasi sukses
    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->title('Event berhasil ditambahkan')
            ->success()
            ->send();
    }
}
