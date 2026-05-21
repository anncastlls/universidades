<?php

namespace App\Filament\Resources\Universidads\Pages;

use App\Filament\Resources\Universidads\UniversidadResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListUniversidads extends ListRecords
{
    protected static string $resource = UniversidadResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
