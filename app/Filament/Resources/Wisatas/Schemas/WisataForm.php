<?php

namespace App\Filament\Resources\Wisatas\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Filament\Forms\Components\RichEditor;

class WisataForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Judul')
                    ->required()
                    ->maxLength(255)
                    ->columnSpan(1)
                    ->validationMessages([
                        'required' => 'Judul wisata wajib diisi',
                        'max' => 'Judul wisata maksimal 255 karakter',
                    ]),

                TextInput::make('address')
                    ->label('Alamat')
                    ->maxLength(500),

                RichEditor::make('description')
                    ->label('Deskripsi')
                    ->toolbarButtons([
                        'bold', 'italic', 'underline', 'bulletList', 'orderedList', 'link'
                    ])
                    ->columnSpanFull(),

                TextInput::make('lat')
                    ->label('Latitude')
                    ->numeric(),

                TextInput::make('lng')
                    ->label('Longitude')
                    ->numeric(),

                FileUpload::make('image')
                    ->label('Gambar')
                    ->directory('uploads/wisatas')
                    ->imagePreviewHeight('150')                    
                    ->getUploadedFileNameForStorageUsing(fn($file) => str_replace(' ', '_', $file->getClientOriginalName()))
                    ->preserveFilenames()
                    ->openable()
                    ->downloadable()
                    ->maxSize(10048)
                    ->disk('public')
                    ->visibility('public')
                    ->columnSpanFull()
                    ->previewable(false)
                    ->image()
                    ->helperText('Maksimum ukuran file 10MB.'),
            ]);
    }
}
