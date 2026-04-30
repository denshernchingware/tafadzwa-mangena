<?php

namespace App\Filament\Resources\ContactPhones;

use App\Filament\Resources\ContactPhones\Pages\CreateContactPhone;
use App\Filament\Resources\ContactPhones\Pages\EditContactPhone;
use App\Filament\Resources\ContactPhones\Pages\ListContactPhones;
use App\Filament\Resources\ContactPhones\Pages\ViewContactPhone;
use App\Filament\Resources\ContactPhones\Schemas\ContactPhoneForm;
use App\Filament\Resources\ContactPhones\Schemas\ContactPhoneInfolist;
use App\Filament\Resources\ContactPhones\Tables\ContactPhonesTable;
use App\Models\ContactPhone;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ContactPhoneResource extends Resource
{
    protected static ?string $model = ContactPhone::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return ContactPhoneForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ContactPhoneInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ContactPhonesTable::configure($table);
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
            'index' => ListContactPhones::route('/'),
            'create' => CreateContactPhone::route('/create'),
            'view' => ViewContactPhone::route('/{record}'),
            'edit' => EditContactPhone::route('/{record}/edit'),
        ];
    }
}
