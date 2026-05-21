<?php

namespace App\Filament\Resources\Aspirantes;

use App\Filament\Resources\Aspirantes\Pages\CreateAspirantes;
use App\Filament\Resources\Aspirantes\Pages\EditAspirantes;
use App\Filament\Resources\Aspirantes\Pages\ListAspirantes;
use App\Filament\Resources\Aspirantes\Schemas\AspirantesForm;
use App\Filament\Resources\Aspirantes\Tables\AspirantesTable;
use App\Models\Aspirantes;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AspirantesResource extends Resource
{
    protected static ?string $model = Aspirantes::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'aspirantes';

    public static function form(Schema $schema): Schema
    {
        return AspirantesForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AspirantesTable::configure($table);
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
            'index' => ListAspirantes::route('/'),
            'create' => CreateAspirantes::route('/create'),
            'edit' => EditAspirantes::route('/{record}/edit'),
        ];
    }
}
