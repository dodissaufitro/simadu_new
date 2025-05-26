<?php

namespace App\Filament\Resources\PenilaianResource\Pages;

use App\Filament\Resources\PenilaianResource;
use App\Models\Penilaian;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Forms\Components\DatePicker;
use Filament\Resources\Pages\ListRecords;
use Maatwebsite\Excel\Facades\Excel;

class ListPenilaians extends ListRecords
{
    protected static string $resource = PenilaianResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Tambah')
            ->icon('heroicon-o-plus-circle'),

            Action::make('Excel')
                ->icon('heroicon-o-arrow-down-tray')
                ->form([
                    DatePicker::make('tgl_tempo_from'),
                    DatePicker::make('tgl_tempo_until'),
                ])
                ->action(function (array $data) {
                    return Excel::download(
                        new Penilaian($data['tgl_tempo_from'] ?? null, $data['tgl_tempo_until'] ?? null),
                        'Rating' . date('Y-m-d') . '.xlsx'
                    );
                })
                ->color('info'),
        ];
    }
}
