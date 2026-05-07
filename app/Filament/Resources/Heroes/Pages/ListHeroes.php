<?php

namespace App\Filament\Resources\Heroes\Pages;

use App\Filament\Resources\Heroes\HeroResource;
use App\Models\Hero;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListHeroes extends ListRecords
{
    protected static string $resource = HeroResource::class;

    protected function getHeaderActions(): array
    {
        $heroExists = Hero::count() > 0;

        if ($heroExists) {
            return [];
        }

        return [
            CreateAction::make()
                ->modal()
                ->modalWidth('lg'),
        ];
    }
}
