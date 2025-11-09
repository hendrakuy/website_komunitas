<?php

namespace App\Filament\Resources\Awards\Schemas;

use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class AwardForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Judul Penghargaan')
                    ->maxLength(255)
                    ->required(),
                TextInput::make('video_url')
                    ->label('URL Video')
                    ->placeholder('https://www.youtube.com/watch?v=example')
                    ->url(),
                RichEditor::make('description')
                    ->label('Deskripsi Penghargaan')
                    ->toolbarButtons([
                        'bold', 'italic', 'underline', 'bulletList', 'orderedList', 'link'
                    ])
                    ->columnSpanFull()
                    ->required(),
            ]);
    }
}
