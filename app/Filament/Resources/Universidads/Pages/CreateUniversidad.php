<?php

namespace App\Filament\Resources\Universidads\Pages;

use App\Filament\Resources\Universidads\UniversidadResource;
use Filament\Resources\Pages\CreateRecord;

class CreateUniversidad extends CreateRecord
{
    protected static string $resource = UniversidadResource::class;
    protected function getRedirectUrl(): string
{
    return $this->getResource()::getUrl('index');
}
}
