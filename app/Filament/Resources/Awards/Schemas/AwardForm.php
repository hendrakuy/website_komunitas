<?php

namespace App\Filament\Resources\Awards\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;

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
                TextInput::make('year')
                    ->label('Tahun')
                    ->numeric()
                    ->required(),
                // RichEditor::make('description')
                //     ->label('Deskripsi Penghargaan')
                //     ->toolbarButtons([
                //         'bold', 'italic', 'underline', 'bulletList', 'orderedList', 'link'
                //     ])
                //     ->columnSpanFull()
                //     ->required(),
                Textarea::make('description')
                    ->label('Deskripsi Penghargaan')
                    ->columnSpanFull()
                    ->required(),
                FileUpload::make('image')
                    ->label('Gambar')
                    ->image()
                    ->imagePreviewHeight('150')
                    ->getUploadedFileNameForStorageUsing(fn($file) => str_replace(' ', '_', $file->getClientOriginalName()))
                    ->openable()                
                    ->downloadable()            
                    ->directory('uploads/awards') 
                    ->maxSize(10240)             
                    ->preserveFilenames()       
                    ->visibility('public')      
                    ->disk('public')
                    ->previewable(false)
                    ->enableOpen()
                    ->helperText('Maksimum ukuran file 10MB.')
                    ->columnSpanFull(),
            ]);
    }
}
