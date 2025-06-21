<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class ComplaintsChart extends ChartWidget
{
    protected static ?string $heading = 'Komplain';

    public function getColumnSpan(): int|string|array
    {
        return 'full'; // tampil penuh
    }

    protected function getContentHeight(): ?string
    {
        return '300px'; // tinggi chart
    }


    protected function getData(): array
    {
        // Ambil data jumlah complaint per bulan per status
        $results = DB::table('complaints')
            ->selectRaw('MONTH(created_at) as bulan, status, COUNT(*) as jumlah')
            ->whereYear('created_at', now()->year)
            ->groupBy('bulan', 'status')
            ->orderBy('bulan')
            ->get();

        // Ambil total semua status per bulan
        $totalPerBulan = DB::table('complaints')
            ->selectRaw('MONTH(created_at) as bulan, COUNT(*) as total')
            ->whereYear('created_at', now()->year)
            ->groupBy('bulan')
            ->orderBy('bulan')
            ->pluck('total', 'bulan');

        // Label bulan (Jan, Feb, dst)
        $bulanLabels = collect(range(1, 12))->map(function ($bulan) {
            return date('M', mktime(0, 0, 0, $bulan, 1));
        })->toArray();

        // Daftar status yang digunakan
        $statuses = [
            'accept',
            'finish',
            'request',
            'deny',
            'pending',
            'completed',
            'proses'
        ];

        // Warna khusus tiap status
        $statusColors = [
            'accept'     => '#3b82f6',
            'finish'     => '#10b981',
            'request'    => '#f59e0b',
            'deny'       => '#ef4444',
            'pending'    => '#fbbf24',
            'completed'  => '#6366f1',
            'proses'     => '#06b6d4',
        ];

        $datasets = [];

        $statusLabels = [
            'accept'     => 'Diterima',
            'finish'     => 'Selesai',
            'request'    => 'Permintaan',
            'deny'       => 'Ditolak',
            'pending'    => 'Menunggu',
            'completed'  => 'Sudah Selesai',
            'proses'     => 'Sedang Diproses',
        ];

        foreach ($statuses as $status) {
            $dataPerBulan = [];

            foreach (range(1, 12) as $bulan) {
                $jumlah = $results->firstWhere(fn($r) => $r->bulan == $bulan && $r->status == $status)?->jumlah ?? 0;
                $dataPerBulan[] = $jumlah;
            }

            $datasets[] = [
                'label' => $statusLabels[$status] ?? ucfirst($status),
                'data' => $dataPerBulan,
                'backgroundColor' => $statusColors[$status] ?? '#999',
            ];
        }

        // Tambahkan satu dataset total per bulan (semua status)
        $datasets[] = [
            'label' => 'Total Komplain',
            'data' => collect(range(1, 12))->map(fn($bulan) => $totalPerBulan[$bulan] ?? 0)->toArray(),
            'backgroundColor' => '#111827', // warna hitam gelap
        ];

        return [
            'datasets' => $datasets,
            'labels' => $bulanLabels,
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
