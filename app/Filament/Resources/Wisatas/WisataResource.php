<?php

namespace App\Filament\Resources\Wisatas;

use App\Filament\Resources\Wisatas\Pages\CreateWisata;
use App\Filament\Resources\Wisatas\Pages\EditWisata;
use App\Filament\Resources\Wisatas\Pages\ListWisatas;
use App\Filament\Resources\Wisatas\Schemas\WisataForm;
use App\Filament\Resources\Wisatas\Tables\WisatasTable;
use App\Models\Wisata;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use UnitEnum;

class WisataResource extends Resource
{
    protected static ?string $model = Wisata::class;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-map';

    protected static ?string $recordTitleAttribute = 'title';

    protected static ?string $navigationLabel = 'Wisata';
    
    protected static string|UnitEnum|null $navigationGroup = 'Komunitas';

    protected static ?string $pluralModelLabel = 'Wisata';

    public static function form(Schema $schema): Schema
    {
        return WisataForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return WisatasTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    // Buat slug otomatis dari nama wisata
    public static function mutateFormDataBeforeCreate(array $data): array
    {
        $slug = Str::slug($data['title']);
        $count = Wisata::where('slug', 'LIKE', "{$slug}%")->count();

        // Kalau sudah ada yang sama, tambahkan angka di belakang
        if ($count > 0) {
            $slug .= '-' . ($count + 1);
        }

        $data['slug'] = $slug;
        return $data;
    }

    // Perbarui slug jika judul diubah
    public static function mutateFormDataBeforeSave(array $data): array
    {
        if (isset($data['title'])) {
            $slug = Str::slug($data['title']);
            $count = Wisata::where('slug', 'LIKE', "{$slug}%")
                ->where('id', '!=', $data['id'] ?? 0)
                ->count();
            if ($count > 0) {
                $slug .= '-' . ($count + 1);
            }
            $data['slug'] = $slug;
        }

        return $data;
    }

    public static function getPages(): array
    {
        return [
            'index' => ListWisatas::route('/'),
            'create' => CreateWisata::route('/create'),
            'edit' => EditWisata::route('/{record}/edit'),
        ];
    }
}
