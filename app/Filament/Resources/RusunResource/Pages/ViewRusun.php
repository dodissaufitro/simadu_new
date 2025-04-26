<?php

namespace App\Filament\Resources\RusunResource\Pages;

use App\Filament\Resources\RusunResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewRusun extends ViewRecord
{
    protected static string $resource = RusunResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
