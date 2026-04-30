<?php

namespace App\Filament\Resources\ContactPhones\Pages;

use App\Filament\Resources\ContactPhones\ContactPhoneResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewContactPhone extends ViewRecord
{
    protected static string $resource = ContactPhoneResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
