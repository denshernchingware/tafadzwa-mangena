<?php

namespace App\Filament\Resources\ContactPhones\Pages;

use App\Filament\Resources\ContactPhones\ContactPhoneResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListContactPhones extends ListRecords
{
    protected static string $resource = ContactPhoneResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->modal()
                ->modalWidth('lg'),
        ];
    }
}
