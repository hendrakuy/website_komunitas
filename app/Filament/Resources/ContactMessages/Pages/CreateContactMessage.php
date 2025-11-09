<?php

namespace App\Filament\Resources\ContactMessages\Pages;

use App\Filament\Resources\ContactMessages\ContactMessageResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Contracts\Support\Htmlable;
use Filament\Notifications\Notification;

class CreateContactMessage extends CreateRecord
{
    protected static string $resource = ContactMessageResource::class;

    public function getTitle(): string|Htmlable
    {
        return 'Tambah Pesan Kontak';
    }

    public function getBreadcrumb(): string
    {
        return 'Tambah Pesan Kontak';
    }

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->title('Pesan kontak berhasil ditambahkan')
            ->success()
            ->send();
    }
}
