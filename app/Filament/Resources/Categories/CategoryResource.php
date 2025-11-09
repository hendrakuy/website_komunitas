<?php

namespace App\Filament\Resources\Categories;

use App\Filament\Resources\Categories\Pages\CreateCategory;
use App\Filament\Resources\Categories\Pages\EditCategory;
use App\Filament\Resources\Categories\Pages\ListCategories;
use App\Filament\Resources\Categories\Schemas\CategoryForm;
use App\Filament\Resources\Categories\Tables\CategoriesTable;
use App\Models\Category;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use UnitEnum;

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-tag';

    protected static ?string $recordTitleAttribute = 'name';

    protected static ?string $navigationLabel = 'Kategori Batik';

    protected static ?string $pluralModelLabel = 'Kategori Batik';

    protected static string|UnitEnum|null $navigationGroup = 'Produk Batik';

    public static function form(Schema $schema): Schema
    {
        return CategoryForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CategoriesTable::configure($table);
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
            'index' => ListCategories::route('/'),
            'create' => CreateCategory::route('/create'),
            'edit' => EditCategory::route('/{record}/edit'),
        ];
    }

// Buat slug otomatis dari nama kategori
    public static function mutateFormDataBeforeCreate(array $data): array
    {
        $slug = Str::slug($data['name']);
        $count = Category::where('slug', 'LIKE', "{$slug}%")->count();

        // Kalau sudah ada yang sama, tambahkan angka di belakang
        if ($count > 0) {
            $slug .= '-' . ($count + 1);
        }

        $data['slug'] = $slug;
        return $data;
    }
    
    // Perbarui slug jika nama kategori diubah
    public static function mutateFormDataBeforeSave(array $data): array
    {
        if (isset($data['name'])) {
            $slug = Str::slug($data['name']);
            $count = Category::where('slug', 'LIKE', "{$slug}%")
                ->where('id', '!=', $data['id'] ?? 0)
                ->count();
            if ($count > 0) {
                $slug .= '-' . ($count + 1);
            }
            $data['slug'] = $slug;
        }

        return $data;
    }

    public static function getDeleteNotificationTitle(): ?string
    {
        return 'Kategori batik berhasil dihapus';
    }
}
