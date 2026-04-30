<?php

namespace App\Filament\Resources\Heroes;

use App\Filament\Resources\Heroes\Pages\CreateHero;
use App\Filament\Resources\Heroes\Pages\EditHero;
use App\Filament\Resources\Heroes\Pages\ListHeroes;
use App\Filament\Resources\Heroes\Pages\ViewHero;
use App\Filament\Resources\Heroes\Schemas\HeroForm;
use App\Filament\Resources\Heroes\Schemas\HeroInfolist;
use App\Filament\Resources\Heroes\Tables\HeroesTable;
use App\Models\Hero;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class HeroResource extends Resource
{
    protected static ?string $model = Hero::class;

    protected static string|BackedEnum|null $navigationIcon = null;

    protected static UnitEnum|string|null $navigationGroup = 'Personal Profile';
    protected static ?string $navigationLabel = 'Hero';
    protected static ?int $navigationSort = 1;

    public static function form(Schema $schema): Schema
    {
        return HeroForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return HeroInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return HeroesTable::configure($table);
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
            'index' => ListHeroes::route('/'),
            'create' => CreateHero::route('/create'),
            'view' => ViewHero::route('/{record}'),
            'edit' => EditHero::route('/{record}/edit'),
        ];
    }
}