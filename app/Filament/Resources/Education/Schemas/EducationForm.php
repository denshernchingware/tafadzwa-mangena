<?php

namespace App\Filament\Resources\Education\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class EducationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('year_from')
                    ->label('Year From')
                    ->required()
                    ->numeric(),

                TextInput::make('year_to')
                    ->label('Year To')
                    ->required()
                    ->numeric(),

                TextInput::make('program')
                    ->required(),

                TextInput::make('institution_name')
                    ->label('Institution Name')
                    ->required(),

                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
