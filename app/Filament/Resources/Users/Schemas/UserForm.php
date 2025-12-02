<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nama')
                    ->required(),

                TextInput::make('email')
                    ->label('Email')
                    ->email()
                    ->required()
                    ->unique(ignoreRecord: true),

                TextInput::make('password')
                    ->password()
                    ->label('Password')
                    ->nullable()
                    ->revealable()
                    ->dehydrateStateUsing(fn($state) => filled($state) ? bcrypt($state) : null)
                    ->dehydrated(fn($state) => filled($state))
                    ->required(fn(string $context) => $context === 'create'),

                TextInput::make('password_confirmation')
                    ->password()
                    ->label('Konfirmasi Password')
                    ->same('password')
                    ->nullable(),

                Select::make('role')
                    ->label('Role')
                    ->options([
                        'admin' => 'Admin',
                        'staff' => 'Staff',
                    ])
                    ->default('admin')
                    ->required(),

                DateTimePicker::make('email_verified_at')
                    ->label('Email Diverifikasi'),

                FileUpload::make('photo')
                    ->label('Foto Profil')
                    ->image()
                    ->directory('uploads/user')
                    ->getUploadedFileNameForStorageUsing(fn($file) => str_replace(' ', '_', $file->getClientOriginalName()))
                    ->openable()
                    ->downloadable()
                    ->maxSize(10240)
                    ->preserveFilenames()
                    ->visibility('public')
                    ->disk('public')
                    ->columnSpanFull()
                    ->previewable(false)
                    ->helperText('Maksimum ukuran file 10MB.')
                    ->nullable(),
            ]);
    }
}
