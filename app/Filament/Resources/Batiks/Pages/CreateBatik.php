<?php

namespace App\Filament\Resources\Batiks\Pages;

use App\Filament\Resources\Batiks\BatikResource;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Contracts\Support\Htmlable;
use Filament\Actions;

class CreateBatik extends CreateRecord
{
    protected static string $resource = BatikResource::class;

    public function getTitle(): string|Htmlable
    {
        return 'Tambah Data Batik';
    }

    public function getBreadcrumb(): string
    {
        return 'Tambah Data Batik';
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    // Tampilkan notifikasi sukses
    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->title('Data batik berhasil ditambahkan')
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
