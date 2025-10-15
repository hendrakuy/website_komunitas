<?php

namespace App\Filament\Resources\Edupackages;

use App\Filament\Resources\Edupackages\Pages\CreateEdupackage;
use App\Filament\Resources\Edupackages\Pages\EditEdupackage;
use App\Filament\Resources\Edupackages\Pages\ListEdupackages;
use App\Filament\Resources\Edupackages\Schemas\EdupackageForm;
use App\Filament\Resources\Edupackages\Tables\EdupackagesTable;
use App\Models\Edupackage;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class EdupackageResource extends Resource
{
    protected static ?string $model = Edupackage::class;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-academic-cap';

    protected static ?string $recordTitleAttribute = 'title';

    protected static ?string $navigationLabel = 'Paket Edukasi';

    protected static ?string $pluralModelLabel = 'Paket Edukasi';

    public static function form(Schema $schema): Schema
    {
        return EdupackageForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return EdupackagesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListEdupackages::route('/'),
            'create' => CreateEdupackage::route('/create'),
            'edit' => EditEdupackage::route('/{record}/edit'),
        ];
    }
}
