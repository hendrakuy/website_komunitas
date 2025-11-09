<?php

namespace App\Filament\Resources\Categories\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class CategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nama Kategori')
                    ->maxLength(255)
                    ->required()
                    ->validationMessages([
                        'required' => 'Nama kategori wajib diisi',
                        'max' => 'Nama kategori maksimal 255 karakter',
                    ]),

                Textarea::make('description')
                    ->label('Deskripsi Kategori')
                    ->columnSpanFull(),
            ]);
    }
}
