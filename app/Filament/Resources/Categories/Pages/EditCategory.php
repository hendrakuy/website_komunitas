<?php

namespace App\Filament\Resources\Categories\Pages;

use App\Filament\Resources\Categories\CategoryResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Str;
use Filament\Notifications\Notification;
use App\Models\Category;

class EditCategory extends EditRecord
{
    protected static string $resource = CategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    // Ubah dari static ke instance method
    protected function mutateFormDataBeforeSave(array $data): array
    {
        // Ambil record lama (kalau sedang edit)
        $record = $this->record ?? null;

        if (isset($data['name'])) {
            // Hanya buat slug baru kalau name diubah atau slug kosong
            if (!$record || $record->name !== $data['name'] || empty($record->slug)) {
                $slug = Str::slug($data['name']);
                $count = Category::where('slug', 'LIKE', "{$slug}%")
                    ->where('id', '!=', $record?->id)
                    ->count();

                if ($count > 0) {
                    $slug .= '-' . ($count + 1);
                }

                $data['slug'] = $slug;
            }
        }

        return $data;
    }

    protected function getSavedNotification(): ?Notification
    {
        return Notification::make()
            ->title('Kategori berhasil diperbarui')
            ->success();
    }

    protected function getRedirectUrl(): ?string
    {
        return $this->getResource()::getUrl('index');
    }
}
