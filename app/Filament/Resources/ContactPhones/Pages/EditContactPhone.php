<?php

namespace App\Filament\Resources\ContactPhones\Pages;

use App\Filament\Resources\ContactPhones\ContactPhoneResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditContactPhone extends EditRecord
{
    protected static string $resource = ContactPhoneResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
