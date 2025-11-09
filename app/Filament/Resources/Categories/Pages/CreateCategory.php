<?php

namespace App\Filament\Resources\Categories\Pages;

use App\Filament\Resources\Categories\CategoryResource;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Contracts\Support\Htmlable;

class CreateCategory extends CreateRecord
{
    protected static string $resource = CategoryResource::class;

    public function getTitle(): string|Htmlable
    {
        return 'Tambah Kategori';
    }

    public function getBreadcrumb(): string
    {
        return 'Tambah Kategori';
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    // Tampilkan notifikasi sukses
    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->title('Kategori berhasil ditambahkan')
            ->success()
            ->send();
    }
}
