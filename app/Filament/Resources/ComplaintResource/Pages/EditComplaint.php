<?php

namespace App\Filament\Resources\ComplaintResource\Pages;

use App\Filament\Resources\ComplaintResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditComplaint extends EditRecord
{
    protected static string $resource = ComplaintResource::class;


    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make()->hidden(!auth()->user()->hasRole('super_admin')),
            Actions\ForceDeleteAction::make()->hidden(!auth()->user()->hasRole('super_admin')),
            Actions\RestoreAction::make()->hidden(!auth()->user()->hasRole('super_admin')),
        ];
    }
}
