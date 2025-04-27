<?php

namespace App\Filament\Resources\TowerResource\Pages;

use App\Filament\Resources\TowerResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewTower extends ViewRecord
{
    protected static string $resource = TowerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
