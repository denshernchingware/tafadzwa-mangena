<?php

namespace App\Filament\Resources\Contacts\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class ContactInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('email')
                    ->label('Email address'),
                TextEntry::make('phone_one')
                    ->label('Phone 1'),
                TextEntry::make('phone_two')
                    ->label('Phone 2'),
                TextEntry::make('location')
                    ->label('Location'),
                TextEntry::make('github_link'),
                TextEntry::make('linkedin_link'),
                TextEntry::make('facebook_link'),
                TextEntry::make('cv')
                    ->label('CV'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
