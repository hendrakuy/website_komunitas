<?php

namespace App\Filament\Resources\Users\Pages;

use App\Filament\Resources\Users\UserResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Contracts\Support\Htmlable;
use Filament\Notifications\Notification;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;

    public function getTitle(): string|Htmlable
    {
        return 'Tambah Pengguna';
    }

    public function getBreadcrumb(): string
    {
        return 'Tambah Pengguna';
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->title('Pengguna berhasil ditambahkan')
            ->success()
            ->send();
    }

    protected function afterCreate(): void
    {
        $this->record->sendEmailVerificationNotification();
    }
}
