<?php

namespace App\Filament\Resources\Heroes\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class HeroForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('main_image')
                    ->image()
                    ->directory('heroes')
                    ->disk('public')
                    ->required(),
                FileUpload::make('additional_image')
                    ->image()
                    ->directory('heroes')
                    ->disk('public'),
                TextInput::make('role')
                    ->required(),
            ]);
    }
}
