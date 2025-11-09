<?php

namespace App\Filament\Resources\ContactMessages\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ContactMessageForm
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
                    ->required(),
                TextInput::make('phone')
                    ->label('Telepon')
                    ->tel()
                    ->required(),
                TextInput::make('subject')
                    ->label('Subjek')
                    ->required(),
                Textarea::make('message')
                    ->label('Pesan')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
