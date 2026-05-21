<?php

namespace App\Filament\Resources\Aspirantes\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class AspirantesForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nombre completo')
                    ->required(),
                TextInput::make('correo'),
                Textarea::make('pregunta')
                    ->columnSpanFull(),
                Textarea::make('respuesta')
                    ->columnSpanFull(),
                TextInput::make('telefono')
                    ->tel(),
            ]);
    }
}
