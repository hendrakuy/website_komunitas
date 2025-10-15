<?php

namespace App\Filament\Resources\Edupackages\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class EdupackageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Nama Paket')
                    ->maxLength(255)
                    ->required(),

                TextInput::make('slug')
                    ->required(),

                Textarea::make('description')
                    ->label('Deskripsi Paket')
                    ->columnSpanFull(),

                RichEditor::make('materials')
                    ->label('Materi Pelatihan')
                    ->toolbarButtons([
                        'bold', 'italic', 'underline', 'bulletList', 'orderedList', 'link'
                    ])
                    ->columnSpanFull(),

                RichEditor::make('facilities')
                    ->label('Fasilitas Paket')
                    ->toolbarButtons([
                        'bold', 'italic', 'underline', 'bulletList', 'orderedList', 'link'
                    ])
                    ->columnSpanFull(),

                RichEditor::make('schedule_info')
                    ->label('Jadwal Pelatihan')
                    ->toolbarButtons([
                        'bold', 'italic', 'underline', 'bulletList', 'orderedList', 'link'
                    ])
                    ->columnSpanFull(),

                TextInput::make('price')
                    ->label('Harga Paket')
                    ->required()
                    ->numeric()
                    ->default(0.0)
                    ->prefix('Rp'),

                TextInput::make('whatsapp_link')
                    ->label('Link WhatsApp')
                    ->url()
                    ->placeholder('https://wa.me/6281234567890')
                    ->required(),

                FileUpload::make('image')
                    ->label('Gambar Paket')
                    ->directory('uploads/edupackages')
                    ->image(),

                Toggle::make('is_active')
                    ->label('Aktifkan Paket')
                    ->default(true)
                    ->required(),
            ]);
    }
}
