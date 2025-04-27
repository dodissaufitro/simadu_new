<?php

namespace App\Filament\Resources\TowerResource\Pages;

use App\Filament\Resources\TowerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTower extends EditRecord
{
    protected static string $resource = TowerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
