<?php

namespace App\Filament\Resources\Batiks\Pages;

use App\Filament\Resources\Batiks\BatikResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;
use Filament\Actions;

class EditBatik extends EditRecord
{
    protected static string $resource = BatikResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make()
                ->label('Hapus')
                ->color('danger')
                ->icon('heroicon-o-trash')
                ->requiresConfirmation(true)
                ->modalHeading('Hapus Produk Batik')
                ->modalSubheading('Apakah Anda yakin ingin menghapus produk batik ini? Tindakan ini tidak dapat dibatalkan.')
                ->successNotificationTitle('Produk Batik berhasil dihapus'),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }

    protected function getSavedNotification(): ?Notification
    {
        return Notification::make()
            ->title('Produk Batik berhasil diperbarui')
            ->success();
    }

    protected function getRedirectUrl(): ?string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getFormActions(): array
    {
        return [
            // Tombol Simpan
            Actions\Action::make('save')
                ->label('Simpan')
                ->color('success')
                ->icon('heroicon-o-check-circle')
                ->action('save')
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
