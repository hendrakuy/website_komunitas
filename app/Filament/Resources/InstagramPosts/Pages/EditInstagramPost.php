<?php

namespace App\Filament\Resources\InstagramPosts\Pages;

use App\Filament\Resources\InstagramPosts\InstagramPostResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use Filament\Notifications\Notification;

class EditInstagramPost extends EditRecord
{
    protected static string $resource = InstagramPostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make()
                ->label('Hapus Konten Instagram')
                ->color('danger')
                ->icon('heroicon-o-trash')
                ->requiresConfirmation(true)
                ->modalHeading('Hapus Konten Instagram')
                ->modalSubheading('Apakah Anda yakin ingin menghapus konten Instagram ini? Tindakan ini tidak dapat dibatalkan.')
                ->modalButton('Ya, Hapus')
                ->successNotificationTitle('Konten Instagram berhasil dihapus'),
        ];
    }

    protected function getRedirectUrl(): ?string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getSavedNotification(): ?Notification
    {
        return Notification::make()
            ->title('Konten Instagram berhasil diperbarui')
            ->success();
    }
}
