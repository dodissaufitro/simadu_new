<?php

namespace App\Filament\Resources\ComplaintResource\Pages;

use App\Exports\ComplaintExport;
use App\Filament\Resources\ComplaintResource;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Resources\Pages\ListRecords;
use Maatwebsite\Excel\Facades\Excel;

class ListComplaints extends ListRecords
{
    protected static string $resource = ComplaintResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Tambah')
                ->icon('heroicon-o-plus-circle'),


            Action::make('Laporan')
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
                ])
                ->action(function (array $data) {
                    return Excel::download(
                        new ComplaintExport(
                            $data['tgl_tempo_from'] ?? null,
                            $data['tgl_tempo_until'] ?? null,
                            $data['status'] ?? null
                        ),
                        'complaints_export_' . date('Y-m-d') . '.xlsx'
                    );
                })
                ->color('info'),

        ];
    }
}
