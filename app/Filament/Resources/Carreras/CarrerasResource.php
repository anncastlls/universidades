<?php

namespace App\Filament\Resources\Carreras;

use App\Filament\Resources\Carreras\Pages\CreateCarreras;
use App\Filament\Resources\Carreras\Pages\EditCarreras;
use App\Filament\Resources\Carreras\Pages\ListCarreras;
use App\Filament\Resources\Carreras\Schemas\CarrerasForm;
use App\Filament\Resources\Carreras\Tables\CarrerasTable;
use App\Models\Carrera;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class CarrerasResource extends Resource
{
    protected static ?string $model = Carrera::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'nombre'; // cámbialo si tu campo principal es otro

    public static function form(Schema $schema): Schema
    {
        return CarrerasForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CarrerasTable::configure($table);
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
            'index' => ListCarreras::route('/'),
            'create' => CreateCarreras::route('/create'),
            'edit' => EditCarreras::route('/{record}/edit'),
        ];
    }
}