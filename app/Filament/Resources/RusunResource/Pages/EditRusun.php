<?php

namespace App\Filament\Resources\RusunResource\Pages;

use App\Filament\Resources\RusunResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRusun extends EditRecord
{
    protected static string $resource = RusunResource::class;

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
