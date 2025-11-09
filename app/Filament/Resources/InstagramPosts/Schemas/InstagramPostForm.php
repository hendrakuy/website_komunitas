<?php

namespace App\Filament\Resources\InstagramPosts\Schemas;

use Dom\Text;
use Filament\Schemas\Schema;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;

class InstagramPostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('image')
                    ->label('Gambar Instagram Post')
                    ->image()
                    ->directory('uploads/instagram_post')
                    ->preserveFilenames() 
                    ->maxSize(10048) 
                    ->disk('public')
                    ->visibility('public')
                    ->columnSpanFull()
                    ->nullable()
                    ->imagePreviewHeight('200')
                    ->previewable(false)
                    ->getUploadedFileNameForStorageUsing(fn($file) => str_replace(' ', '_', $file->getClientOriginalName()))
                    // ->getUploadedFileUrlUsing(fn($file) => asset('storage/' . str_replace('uploads/instagram_post/', 'uploads/instagram_post/thumbnails/', $file)))
                    ->helperText('Maksimum ukuran file 10MB.'),

                Textarea::make('caption')
                    ->label('Caption')
                    ->rows(3)
                    ->columnSpanFull(),

                TextInput::make('link')
                    ->label('Link Postingan')
                    ->columnSpanFull(),

                Toggle::make('is_active')
                    ->label('Tampilkan di Beranda')
                    ->default(true)
                    ->columnSpanFull(),

                TextInput::make('order')
                    ->label('Urutan Tampil')
                    ->numeric()
                    ->default(0)
                    ->columnSpanFull(),
            ]);
    }
}
