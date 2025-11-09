<?php

namespace App\Filament\Resources\Awards\Pages;

use App\Filament\Resources\Awards\AwardResource;
use Filament\Actions\DeleteAction;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;

class EditAward extends EditRecord
{
    protected static string $resource = AwardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make()
                ->label('Hapus Penghargaan')
                ->color('danger')
                ->icon('heroicon-o-trash')
                ->requiresConfirmation(true)
                ->modalHeading('Hapus Penghargaan')
                ->modalSubheading('Apakah Anda yakin ingin menghapus penghargaan ini? Tindakan ini tidak dapat dibatalkan.')
                ->modalButton('Ya, Hapus')
                ->successNotificationTitle('Penghargaan berhasil dihapus'),
        ];
    }

    protected function getSavedNotification(): ?Notification
    {
        return Notification::make()
            ->title('Penghargaan berhasil diperbarui')
            ->success();
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
