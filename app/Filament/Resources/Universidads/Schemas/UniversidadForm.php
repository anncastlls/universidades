<?php

namespace App\Filament\Resources\Universidads\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Filament\Forms\Components\FileUpload;

class UniversidadForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nombre')
                    ->required(),
                FileUpload::make('imagen')
                  ->image()
    ->directory('universidades')
    ->disk('public'),
                Textarea::make('descripción')
                    ->columnSpanFull(),
                TextInput::make('web'),
                TextInput::make('telefono')
                    ->tel(),
                TextInput::make('contacto'),
                TextInput::make('youtube'),
                TextInput::make('facebook'),
                TextInput::make('instagram'),
            ]);
    }
}
