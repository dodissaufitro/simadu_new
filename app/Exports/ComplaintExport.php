<?php

namespace App\Exports;

use App\Models\Complaint;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ComplaintExport implements FromCollection, WithHeadings, WithMapping
{
    protected $tglTempoFrom;
    protected $tglTempoUntil;
    protected $status;
    protected $rusun;
    protected $tower;

    public function __construct($tglTempoFrom = null, $tglTempoUntil = null, $status = null, $rusun = null, $tower = null)
    {
        $this->tglTempoFrom = $tglTempoFrom;
        $this->tglTempoUntil = $tglTempoUntil;
        $this->status = $status;
        $this->rusun = $rusun;
        $this->tower = $tower;
    }

    public function collection()
    {
        $query = Complaint::select([
            'complaints.*',
            'us.name as user_name',
            'un.name as unit_name',
            'tw.name as tower_name',
            'kr.name as koor_name',/* 
            'kr.rusun_id as rusun', */
            'kr.tower_id as tower',
        ])
            ->leftJoin('towers as tw', 'complaints.tower_id', '=', 'tw.id')
            ->leftJoin('units as un', 'complaints.unit_id', '=', 'un.id')
            ->leftJoin('users as us', 'complaints.user_id', '=', 'us.id')
            ->leftJoin('users as kr', 'complaints.koor_id', '=', 'kr.id');

        if ($this->tglTempoFrom) {
            $query->whereDate('complaints.created_at', '>=', $this->tglTempoFrom);
        }

        if ($this->tglTempoUntil) {
            $query->whereDate('complaints.created_at', '<=', $this->tglTempoUntil);
        }
        if ($this->status) {
            $query->whereDate('complaints.status', '<=', $this->status);
        }

        /*  if ($this->rusun) {
            $query->where('kr.rusun_id', '=', $this->rusun);
        } */

        if ($this->tower) {
            $query->where('complaints.tower_id', '=', $this->tower);
        }
        return $query->get();
    }

    public function headings(): array
    {
        return [
            'Penghuni',
            'Unit & Tower',
            'Koordinator',
            'Tanggal Komplain',
            'Keluhan',
            'Status',
            'Tanggal Eksekusi'
        ];
    }

    public function map($complaint): array
    {
        return [
            $complaint->user_name ?? 'N/A',
            ($complaint->unit_name ?? 'N/A') . ' - ' . ($complaint->tower_name ?? 'N/A'),
            $complaint->koor_name ?? 'N/A',
            $complaint->created_at?->format('d/m/Y') ?? 'N/A',
            $complaint->complaint ?? '-',
            $complaint->status ?? 'N/A',
            \Carbon\Carbon::parse($complaint->tanggal_eksekusi)?->format('d/m/Y') ?? 'Belum dieksekusi'
        ];
    }
}
