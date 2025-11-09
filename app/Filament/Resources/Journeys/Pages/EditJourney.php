<?php

namespace App\Filament\Resources\Journeys\Pages;

use App\Filament\Resources\Journeys\JourneyResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditJourney extends EditRecord
{
    protected static string $resource = JourneyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make()
                ->label('Hapus')
                ->color('danger')
                ->icon('heroicon-o-trash')
                ->requiresConfirmation(true)
                ->modalHeading('Hapus Perjalanan')
                ->modalSubheading('Apakah Anda yakin ingin menghapus perjalanan ini? Tindakan ini tidak dapat dibatalkan.')
                ->modalButton('Ya, Hapus')
                ->successNotificationTitle('Perjalanan berhasil dihapus'),
        ];
    }

    protected function getRedirectUrl(): ?string
    {
        return $this->getResource()::getUrl('index');
    }
}
