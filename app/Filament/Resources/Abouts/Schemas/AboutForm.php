<?php

namespace App\Filament\Resources\Abouts\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class AboutForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                Textarea::make('description1')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('description2')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('description3')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
