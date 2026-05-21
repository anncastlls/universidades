<?php

namespace App\Filament\Resources\Carreras\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
class CarrerasForm
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
                RichEditor::make('descripcion'),
                TextInput::make('perfil_ingreso'),
                TextInput::make('perfil_egreso'),
                TextInput::make('contacto'),
            ]);
    }
}
