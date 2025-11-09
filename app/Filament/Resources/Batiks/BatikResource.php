<?php

namespace App\Filament\Resources\Batiks;

use App\Filament\Resources\Batiks\Pages\CreateBatik;
use App\Filament\Resources\Batiks\Pages\EditBatik;
use App\Filament\Resources\Batiks\Pages\ListBatiks;
use App\Filament\Resources\Batiks\Schemas\BatikForm;
use App\Filament\Resources\Batiks\Tables\BatiksTable;
use App\Models\Batik;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;
use UnitEnum;

class BatikResource extends Resource
{
    protected static ?string $model = Batik::class;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-shopping-bag';

    protected static ?string $navigationLabel = 'Produk Batik';

    protected static ?string $recordTitleAttribute = 'title';

    protected static ?string $pluralModelLabel = 'Produk Batik';

    protected static string|UnitEnum|null $navigationGroup = 'Produk Batik';

    public static function form(Schema $schema): Schema
    {
        return BatikForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return BatiksTable::configure($table);
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
            'index' => ListBatiks::route('/'),
            'create' => CreateBatik::route('/create'),
            'edit' => EditBatik::route('/{record}/edit'),
        ];
    }

    public static function getRecordRouteBindingEloquentQuery(): Builder
    {
        return parent::getRecordRouteBindingEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
