<?php

namespace App\Filament\Resources\Abouts\Pages;

use App\Filament\Resources\Abouts\AboutResource;
use App\Models\About;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAbouts extends ListRecords
{
    protected static string $resource = AboutResource::class;

    protected function getHeaderActions(): array
    {
        $aboutExists = About::count() > 0;

        if ($aboutExists) {
            return [];
        }

        return [
            CreateAction::make()
                ->modal()
                ->modalWidth('lg'),
        ];
    }
}
