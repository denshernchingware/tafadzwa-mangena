<?php

namespace App\Filament\Resources\ProjectItems\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ProjectItemForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
              
                FileUpload::make('image')
                    ->image()
                    ->required(),
                TextInput::make('name')
                    ->required(),
                Textarea::make('text')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}