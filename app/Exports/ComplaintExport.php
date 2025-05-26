<?php

namespace App\Exports;

use App\Models\Complaint;
use Maatwebsite\Excel\Concerns\FromCollection;

class ComplaintExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */

    protected $tglTempoFrom;
    protected $tglTempoUntil;

    public function __construct($tglTempoFrom = null, $tglTempoUntil = null)
    {
        $this->tglTempoFrom = $tglTempoFrom;
        $this->tglTempoUntil = $tglTempoUntil;
    }

    public function collection()
    {
        $query=Complaint::get();

        if ($this->tglTempoFrom) {
            $query->whereDate('create_at', '>=', $this->tglTempoFrom);
        }

        if ($this->tglTempoUntil) {
            $query->whereDate('create_at', '<=', $this->tglTempoUntil);
        }
        return $query;
    }

       public function headings(): array
    {
        return [
            'Penghuni',
            'Rusun-tower',
            'Koordinator',
            'Tanggal',
            'Complaint',
            'Tanggal eksekusi'
        ];
    }

    public function map($row): array
    {
        return [
            $row->user->name,
            $row->rusun->name.' '.$row->tower->name,
            $row->koor->name,
            $row->create_at,
            $row->complaint,
            $row->tanggal_eksekusi
        ];
    }
}
