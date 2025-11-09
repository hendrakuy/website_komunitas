<?php

namespace App\Filament\Resources\Events\Pages;

use App\Filament\Resources\Events\EventResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use Filament\Notifications\Notification;
use Illuminate\Support\Str;

class EditEvent extends EditRecord
{
    protected static string $resource = EventResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make()
                ->label('Hapus Event')
                ->color('danger')
                ->icon('heroicon-o-trash')
                ->requiresConfirmation(true)
                ->modalHeading('Hapus Event')
                ->modalSubheading('Apakah Anda yakin ingin menghapus event ini? Tindakan ini tidak dapat dibatalkan.')
                ->modalButton('Ya, Hapus')
                ->successNotificationTitle('Event berhasil dihapus'),
        ];
    }

    protected function getSavedNotification(): ?Notification
    {
        return Notification::make()
            ->title('Event berhasil diperbarui')
            ->success();
    }

    protected function getRedirectUrl(): ?string
    {
        return $this->getResource()::getUrl('index');
    }
}
