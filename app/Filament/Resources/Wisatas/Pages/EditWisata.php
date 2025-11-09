<?php

namespace App\Filament\Resources\Wisatas\Pages;

use App\Filament\Resources\Wisatas\WisataResource;
use Filament\Actions\DeleteAction;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;
use App\Models\Wisata;
use Illuminate\Support\Str;

class EditWisata extends EditRecord
{
    protected static string $resource = WisataResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make()
                ->label('Hapus Wisata')
                ->color('danger')
                ->icon('heroicon-o-trash')
                ->requiresConfirmation(true)
                ->modalHeading('Hapus Wisata')
                ->modalSubheading('Apakah Anda yakin ingin menghapus wisata ini? Tindakan ini tidak dapat dibatalkan.')
                ->modalButton('Ya, Hapus')
                ->successNotificationTitle('Wisata berhasil dihapus'),
        ];
    }

    protected function getSavedNotification(): ?Notification
    {
        return Notification::make()
            ->title('Wisata berhasil diperbarui')
            ->success();
    }

    protected function getRedirectUrl(): ?string
    {
        return $this->getResource()::getUrl('index');
    }

    // Ubah dari static ke instance method
    protected function mutateFormDataBeforeSave(array $data): array
    {
        if (isset($data['title'])) {
            $slug = Str::slug($data['title']);
            $count = Wisata::where('slug', 'LIKE', "{$slug}%")
                ->where('id', '!=', $this->record->id) // Gunakan $this->record->id
                ->count();
            if ($count > 0) {
                $slug .= '-' . ($count + 1);
            }
            $data['slug'] = $slug;
        }

        return $data;
    }
}
