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
                    
                Textarea::make('content')
                    ->label('Cerita')
                    ->rows(5)
                    ->columnSpanFull(),

                // RichEditor::make('description')
                //     ->label('Deskripsi')
                //     ->toolbarButtons([
                //         'bold',
                //         'italic',
                //         'underline',
                //         'strike',
                //         'link',
                //         'bulletList',
                //         'orderedList',
                //         'blockquote',
                //         'codeBlock',
                //         'undo',
                //         'redo',
                //     ])
                //     ->columnSpanFull()
                //     ->required(),

                FileUpload::make('image')
                    ->label('Gambar')
                    ->directory('uploads/journeys') // Direktori penyimpanan
                    ->image()
                    ->preserveFilenames()
                    ->maxSize(2048) // Maksimum ukuran file dalam KB
                    ->disk('public')
                    ->visibility('public')
                    ->columnSpanFull()
                    ->nullable()
                    ->helperText('Maksimum ukuran file 2MB.'),
            ]);
    }
}
