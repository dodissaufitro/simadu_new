<?php

namespace App\Filament\Resources\PenilaianResource\Pages;

use App\Exports\PenilaianExport;
use App\Filament\Resources\PenilaianResource;
use App\Models\Penilaian;
use App\Models\Rusun;
use App\Models\Tower;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
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

            Action::make('Download')
                ->icon('heroicon-o-arrow-down-tray')
                ->form([
                    DatePicker::make('tgl_tempo_from'),
                    DatePicker::make('tgl_tempo_until'),
                    Select::make('rusun')
                        ->label('Rusun')
                        ->options(fn() => Rusun::pluck('name', 'id'))
                        ->searchable()
                        ->placeholder('Semua Unit')
                        ->nullable(),
                    Select::make('tower')
                        ->label('Tower')
                        ->options(fn() => Tower::pluck('name', 'id'))
                        ->searchable()
                        ->placeholder('Semua Tower')
                        ->nullable(),
                ])
                ->action(function (array $data) {
                    return Excel::download(
                        new PenilaianExport(
                            $data['tgl_tempo_from'] ?? null,
                            $data['tgl_tempo_until'] ?? null,
                            $data['rusun'] ?? null,
                            $data['tower'] ?? null,

                        ),
                        'Rating_' . $data['rusun'] . '-' . $data['tower'] . date('Y-m-d') . '.xlsx'
                    );
                })
                ->hidden(!auth()->user()->hasRole('koordinator') && !auth()->user()->hasRole('super_admin'))
                ->color('info'),
        ];
    }
}
