<?php

namespace App\Filament\Resources\Edupackages\Pages;

use App\Filament\Resources\Edupackages\EdupackageResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListEdupackages extends ListRecords
{
    protected static string $resource = EdupackageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
