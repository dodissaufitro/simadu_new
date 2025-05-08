<?php

namespace App\Filament\Resources\RusunResource\Pages;

use App\Filament\Resources\RusunResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRusuns extends ListRecords
{
    protected static string $resource = RusunResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Tambah')
            ->icon('heroicon-o-plus-circle'),
        ];
    }
}
