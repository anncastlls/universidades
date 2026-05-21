<?php

namespace App\Filament\Resources\Aspirantes\Pages;

use App\Filament\Resources\Aspirantes\AspirantesResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAspirantes extends EditRecord
{
    protected static string $resource = AspirantesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
