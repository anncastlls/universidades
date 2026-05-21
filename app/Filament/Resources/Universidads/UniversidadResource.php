<?php

namespace App\Filament\Resources\Universidads;

use App\Filament\Resources\Universidads\Pages\CreateUniversidad;
use App\Filament\Resources\Universidads\Pages\EditUniversidad;
use App\Filament\Resources\Universidads\Pages\ListUniversidads;
use App\Filament\Resources\Universidads\Schemas\UniversidadForm;
use App\Filament\Resources\Universidads\Tables\UniversidadsTable;
use App\Models\Universidad;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class UniversidadResource extends Resource
{
    protected static ?string $model = Universidad::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Universidad';

    public static function form(Schema $schema): Schema
    {
        return UniversidadForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return UniversidadsTable::configure($table);
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
            'index' => ListUniversidads::route('/'),
            'create' => CreateUniversidad::route('/create'),
            'edit' => EditUniversidad::route('/{record}/edit'),
        ];
    }
}
