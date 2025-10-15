<?php

namespace App\Filament\Resources\Umkms\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class UmkmForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nama UMKM')
                    ->required()
                    ->maxLength(255)
                    ->validationMessages([
                        'required' => 'Nama UMKM wajib diisi.',
                        'max' => 'Nama UMKM maksimal :max karakter.',
                    ]),

                TextInput::make('owner')
                    ->label('Pemilik')
                    ->required()
                    ->maxLength(255)
                    ->validationMessages([
                        'required' => 'Pemilik wajib diisi.',
                        'max' => 'Pemilik maksimal :max karakter.',
                    ]),

                TextInput::make('phone')
                    ->label('No. Telepon')
                    ->tel(),

                TextInput::make('address')
                    ->label('Alamat'),

                Textarea::make('about')
                    ->label('Tentang UMKM')
                    ->columnSpanFull(),

                FileUpload::make('logo')
                    ->label('Logo UMKM')
                    ->image()
                    ->directory('uploads/umkm/logo')
                    ->maxSize(2048)
                    ->preserveFilenames()
                    ->getUploadedFileNameForStorageUsing(fn($file) => str_replace(' ', '_', $file->getClientOriginalName()))
                    ->visibility('public')
                    ->disk('public')
                    ->imagePreviewHeight('250')
                    ->previewable(false)
                    ->openable()
                    ->downloadable()
                    // ->columnSpanFull()
                    ->helperText('Maksimal 2MB. Format: jpg, png, gif.'),

                FileUpload::make('background_image')
                    ->label('Gambar Latar Belakang UMKM')
                    ->image()
                    ->directory('uploads/umkm/background')
                    // ->maxSize(2048)
                    ->preserveFilenames()
                    ->getUploadedFileNameForStorageUsing(fn($file) => str_replace(' ', '_', $file->getClientOriginalName()))
                    ->visibility('public')
                    ->disk('public')
                    ->imagePreviewHeight('250')
                    ->previewable(false)
                    ->openable()
                    ->downloadable()
                    // ->columnSpanFull()
                    ->helperText('Maksimal 2MB. Format: jpg, png, gif.'),
            ]);
    }
}
