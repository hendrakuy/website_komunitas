<?php

namespace App\Filament\Resources\Journeys\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use FIlament\Forms\Form;
use Filament\Forms\Components\Textarea;

class JourneyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('year')
                    ->label('Tahun')
                    ->numeric()
                    ->minValue(1900)
                    ->maxValue(now('UTC')->year)
                    ->columnSpan(1)
                    ->required(),

                TextInput::make('title')
                    ->label('Judul')
                    ->maxLength(255)
                    ->required()
                    ->columnSpan(1),

                RichEditor::make('content')
                    ->label('Deskripsi')
                    ->toolbarButtons([
                        'bold', 'italic', 'underline', 'bulletList', 'orderedList', 'link'
                    ])
                    ->columnSpanFull(),

                FileUpload::make('image')
                    ->label('Gambar')
                    ->directory('uploads/journeys') // Direktori penyimpanan
                    ->image()
                    ->getUploadedFileNameForStorageUsing(fn($file) => str_replace(' ', '_', $file->getClientOriginalName()))
                    ->preserveFilenames()
                    ->maxSize(10048) // Maksimum ukuran file dalam KB
                    ->disk('public')
                    ->visibility('public')
                    ->columnSpanFull()
                    ->nullable()
                    ->previewable(false)
                    ->helperText('Maksimum ukuran file 10MB.'),
            ]);
    }
}
