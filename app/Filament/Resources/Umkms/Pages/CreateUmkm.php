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

            // Tombol Batal
            Actions\Action::make('cancel')
                ->label('Batal')
                ->color('warning')
                ->icon('heroicon-o-x-mark')
                ->url($this->getResource()::getUrl('index')),
        ];
    }
}
