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

                // TextInput::make('slug')
                //     ->required(),

                // Textarea::make('description')
                //     ->label('Deskripsi Event')
                //     ->columnSpanFull(),

                RichEditor::make('description')
                    ->label('Deskripsi Event')
                    ->columnSpanFull()
                    ->toolbarButtons([
                        'bold',
                        'italic',
                        'underline',
                        'strike',
                        'bulletList',
                        'orderedList',
                        'link',
                        // 'codeBlock',
                        'blockquote',
                        'redo',
                        'undo',
                    ])
                    ->required(),

                DateTimePicker::make('start_at')
                    ->label('Waktu Mulai'),

                DateTimePicker::make('end_at')
                    ->label('Waktu Berakhir'),

                Toggle::make('is_promo')
                    ->required(),

                FileUpload::make('image')
                    ->label('Gambar Event')
                    ->image()
                    ->directory('uploads/events') // Direktori penyimpanan
                    ->preserveFilenames() // Pertahankan nama file asli
                    ->maxSize(2048) // Maksimum ukuran file dalam KB
                    ->disk('public')
                    ->columnSpanFull()
                    ->nullable()
                    ->helperText('Maksimum ukuran file 2MB.'),
            ]);
    }
}
