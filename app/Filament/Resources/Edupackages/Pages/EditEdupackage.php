<?php

namespace App\Filament\Resources\Edupackages\Pages;

use App\Filament\Resources\Edupackages\EdupackageResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditEdupackage extends EditRecord
{
    protected static string $resource = EdupackageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
