<?php

namespace App\Filament\Resources\Edupackages\Pages;

use App\Filament\Resources\Edupackages\EdupackageResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Str;
use App\Models\Edupackage;
use Filament\Notifications\Notification;

class EditEdupackage extends EditRecord
{
    protected static string $resource = EdupackageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make()
                ->label('Hapus Paket Edukasi')
                ->color('danger')
                ->icon('heroicon-o-trash')
                ->requiresConfirmation(true)
                ->modalHeading('Hapus Paket Edukasi')
                ->modalSubheading('Apakah Anda yakin ingin menghapus paket edukasi ini? Tindakan ini tidak dapat dibatalkan.')
                ->modalButton('Ya, Hapus')
                ->successNotificationTitle('Paket Edukasi berhasil dihapus'),
        ];
    }

    protected function getRedirectUrl(): ?string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getSavedNotification(): ?Notification
    {
        return Notification::make()
            ->title('Paket Edukasi berhasil diperbarui')
            ->success();
    }
}
