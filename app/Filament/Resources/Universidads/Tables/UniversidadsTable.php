<?php

namespace App\Filament\Resources\Universidads\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class UniversidadsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nombre')
                    ->searchable(),
                ImageColumn::make('imagen')
                    ->searchable(),
                TextColumn::make('web')
                    ->searchable(),
                TextColumn::make('descripcion')
                    ->searchable(),
                TextColumn::make('telefono')
                    ->searchable(),
                TextColumn::make('contacto')
                    ->searchable(),
                TextColumn::make('youtube')
                    ->searchable(),
                TextColumn::make('facebook')
                    ->searchable(),
                TextColumn::make('instagram')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
