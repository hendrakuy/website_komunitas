<?php

namespace App\Filament\Resources\Events\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;

class EventForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Judul Event')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),

                RichEditor::make('description')
                    ->label('Deskripsi Event')
                    ->columnSpanFull()
                    ->toolbarButtons([
                        'bold', 'italic', 'underline', 'bulletList', 'orderedList', 'link'
                    ])
                    ->required(),

                DateTimePicker::make('start_at')
                    ->label('Waktu Mulai'),

                DateTimePicker::make('end_at')
                    ->label('Waktu Berakhir'),

                Toggle::make('is_promo')
                    ->label('Apakah ini promosi?')
                    ->required(),

                FileUpload::make('image')
                    ->label('Gambar Event')
                    ->image()
                    ->imagePreviewHeight('150')
                    ->getUploadedFileNameForStorageUsing(fn($file) => str_replace(' ', '_', $file->getClientOriginalName()))
                    ->directory('uploads/events') // Direktori penyimpanan
                    ->preserveFilenames() // Pertahankan nama file asli
                    ->maxSize(10048) // Maksimum ukuran file dalam KB
                    ->disk('public')
                    ->columnSpanFull()
                    ->visibility('public')
                    ->previewable(false)
                    ->nullable()
                    ->helperText('Maksimum ukuran file 10MB.'),
            ]);
    }
}
