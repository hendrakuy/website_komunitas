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

    protected function getFormActions(): array
    {
        return [
            // Tombol Simpan
            Actions\Action::make('save')
                ->label('Simpan')
                ->color('success')
                ->icon('heroicon-o-check-circle')
                ->action('create')
                ->requiresConfirmation(false),
                // ->successNotificationTitle('Event berhasil ditambahkan'),

            // Tombol Batal
            Actions\Action::make('cancel')
                ->label('Batal')
                ->color('warning')
                ->url($this->getResource()::getUrl('index'))
                ->icon('heroicon-o-x-mark'),
        ];
    }
}
