<?php

namespace App\Filament\Resources\ProjectItems\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ProjectItemForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
            Select::make('project_id')
                ->relationship('project', 'title')
                ->required(),
                FileUpload::make('image')
                    ->image()
                ->disk('public')
                ->directory('projectItem')
                    ->required(),
                TextInput::make('name')
                    ->required(),
                Textarea::make('text')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}