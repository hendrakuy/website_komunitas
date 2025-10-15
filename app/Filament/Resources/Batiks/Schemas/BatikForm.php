<?php

namespace App\Filament\Resources\Batiks\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Filament\Forms;

class BatikForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(2)
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Nama Batik')
                    ->required()
                    ->maxLength(255)
                    ->validationMessages([
                        'required' => 'Nama batik wajib diisi',
                        'max' => 'Nama batik maksimal 255 karakter',
                    ]),

                Forms\Components\Select::make('category_id')
                    ->relationship('category', 'name')
                    ->label('Kategori')
                    ->placeholder('Pilih Kategori')
                    ->required()
                    ->validationMessages([
                        'required' => 'Kategori wajib dipilih',
                    ]),

                Forms\Components\Select::make('umkm_id')
                    ->relationship('umkm', 'name')
                    ->label('UMKM')
                    ->preload()
                    ->placeholder('Pilih UMKM')
                    ->searchable(),

                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'name')
                    ->placeholder('Pilih Pembuat')
                    ->label('Dibuat Oleh'),

                Forms\Components\Textarea::make('description')
                    ->label('Deskripsi')
                    ->columnSpanFull()
                    ->required()
                    ->validationMessages([
                        'required' => 'Deskripsi batik wajib diisi',
                    ]),

                Forms\Components\TextInput::make('material')
                    ->label('Bahan'),

                Forms\Components\TextInput::make('size')
                    ->label('Ukuran'),

                Forms\Components\TextInput::make('price')
                    ->label('Harga')
                    ->numeric()
                    ->prefix('Rp')
                    ->required()
                    ->validationMessages([
                        'required' => 'Harga batik wajib diisi',
                        'numeric' => 'Harga batik harus berupa angka',
                    ]),

                Forms\Components\FileUpload::make('image')
                    ->label('Foto Batik')
                    ->image()
                    ->imagePreviewHeight('150') // tampilkan thumbnail kecil
                    ->getUploadedFileNameForStorageUsing(fn($file) => str_replace(' ', '_', $file->getClientOriginalName()))
                    ->openable()                // biar bisa klik buat lihat full image
                    ->downloadable()            // tombol download
                    ->directory('uploads/batik') // simpan di folder ini
                    ->maxSize(10240)             // maksimal ukuran file 10MB
                    ->preserveFilenames()       // biar nama file gak diganti hash panjang
                    ->visibility('public')      // disimpan di disk public
                    ->previewable(false)
                    ->enableOpen()
                    ->columnSpanFull(),
            ]);
    }
}
