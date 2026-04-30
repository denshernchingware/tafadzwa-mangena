<?php

namespace App\Filament\Resources\ProjectDetails;

use App\Filament\Resources\ProjectDetails\Pages\CreateProjectDetail;
use App\Filament\Resources\ProjectDetails\Pages\EditProjectDetail;
use App\Filament\Resources\ProjectDetails\Pages\ListProjectDetails;
use App\Filament\Resources\ProjectDetails\Pages\ViewProjectDetail;
use App\Filament\Resources\ProjectDetails\Schemas\ProjectDetailForm;
use App\Filament\Resources\ProjectDetails\Schemas\ProjectDetailInfolist;
use App\Filament\Resources\ProjectDetails\Tables\ProjectDetailsTable;
use App\Models\ProjectDetail;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ProjectDetailResource extends Resource
{
    protected static ?string $model = ProjectDetail::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return ProjectDetailForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ProjectDetailInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ProjectDetailsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListProjectDetails::route('/'),
            'create' => CreateProjectDetail::route('/create'),
            'view' => ViewProjectDetail::route('/{record}'),
            'edit' => EditProjectDetail::route('/{record}/edit'),
        ];
    }
}
