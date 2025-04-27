<?php

namespace App\Filament\Resources\LantaiResource\Pages;

use App\Filament\Resources\LantaiResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewLantai extends ViewRecord
{
    protected static string $resource = LantaiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
