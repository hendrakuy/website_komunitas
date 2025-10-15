<?php

namespace App\Filament\Resources\Edupackages\Pages;

use App\Filament\Resources\Edupackages\EdupackageResource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;

class CreateEdupackage extends CreateRecord
{
    protected static string $resource = EdupackageResource::class;

    public function getTitle(): string
    {
        return 'Tambah Paket Edukasi';
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->title('Paket Edukasi Berhasil Ditambahkan')
            ->success()
            ->send();
    }
}
