<?php

namespace App\Filament\Resources\Heroes\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class HeroInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('description')
                    ->columnSpanFull(),
                ImageEntry::make('main_image')
                    ->disk('public'),
                ImageEntry::make('additional_image')
                    ->disk('public')
                    ->placeholder('-'),
                TextEntry::make('role'),
               // TextEntry::make('cv_file'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
