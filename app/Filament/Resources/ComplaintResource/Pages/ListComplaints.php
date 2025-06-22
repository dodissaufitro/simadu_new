<?php

namespace App\Filament\Resources\ComplaintResource\Pages;

use App\Exports\ComplaintExport;
use App\Filament\Resources\ComplaintResource;
use App\Models\Rusun;
use App\Models\Tower;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Filters\SelectFilter;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Database\Eloquent\Builder;

class ListComplaints extends ListRecords
{
    protected static string $resource = ComplaintResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Tambah')
                ->icon('heroicon-o-plus-circle'),


            Action::make('Download')
                ->icon('heroicon-o-arrow-down-tray')
                ->form([
                    DatePicker::make('tgl_tempo_from')
                        ->label('Dari Tanggal'),
                    DatePicker::make('tgl_tempo_until')
                        ->label('Sampai Tanggal'),
                    Select::make('status')
                        ->label('Status')
                        ->options([
                            'accept' => 'Accept',
                            'finish' => 'Finish',
                            'request' => 'Request',
                            'deny' => 'Deny',
                            'pending' => 'Pending',
                            'completed' => 'Completed',
                            'proses' => 'Proses',
                        ])
                        ->placeholder('Semua Status')
                        ->nullable(),
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
                        new ComplaintExport(
                            $data['tgl_tempo_from'] ?? null,
                            $data['tgl_tempo_until'] ?? null,
                            $data['status'] ?? null,
                            $data['rusun'] ?? null,
                            $data['tower'] ?? null,
                        ),
                        'complaints_export_' . $data['rusun'] . '_' . $data['tower'] . date('Y-m-d') . '.xlsx'
                    );
                })
                ->hidden(!auth()->user()->hasRole('koordinator') && !auth()->user()->hasRole('super_admin'))
                ->color('info'),

        ];
    }
}
