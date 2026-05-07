<?php

namespace App\Filament\Resources\Contacts\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ContactForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                TextInput::make('phone_one')
                    ->label('Phone 1')
                    ->tel(),
                TextInput::make('phone_two')
                    ->label('Phone 2')
                    ->tel(),
                TextInput::make('location')
                    ->label('Location'),
                TextInput::make('github_link')
                    ->required(),
                TextInput::make('linkedin_link')
                    ->required(),
                TextInput::make('facebook_link')
                    ->required(),
                FileUpload::make('cv')
                    ->label('CV')
                    ->disk('public')
                    ->directory('cvs'),
            ]);
    }
}
