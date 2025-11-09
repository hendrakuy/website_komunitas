<?php

namespace App\Filament\Resources\Journeys\Pages;

use App\Filament\Resources\Journeys\JourneyResource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Schemas\Components\Html;
use Illuminate\Contracts\Support\Htmlable;
use Filament\Notifications\Notification;

class CreateJourney extends CreateRecord
{
    protected static string $resource = JourneyResource::class;

    public function getTitle(): string|Htmlable
    {
        return 'Tambah Data Perjalanan';
    }

    public function getBreadcrumb(): string
    {
        return 'Tambah Data Perjalanan';
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    public function getCreateNotification(): ?Notification
    {
        return Notification::make()
            ->title('Data perjalanan berhasil ditambahkan')
            ->success()
            ->send();
    }
}
