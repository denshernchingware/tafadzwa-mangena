<?php

namespace App\Filament\Resources\ProjectDetails\Pages;

use App\Filament\Resources\ProjectDetails\ProjectDetailResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewProjectDetail extends ViewRecord
{
    protected static string $resource = ProjectDetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
