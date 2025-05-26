<?php

namespace App\Exports;

use App\Models\Penilaian;
use Maatwebsite\Excel\Concerns\FromCollection;

class PenilaianExport implements FromCollection
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
        $query = Penilaian::get();

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
            'Name',
            'Rusun-tower',
            'Rating Layanan',
            'Rating Kecepatan',
            'Rating Kualitas'
        ];
    }

    public function map($row): array
    {
        return [
            $row->user->name,
            $row->user->rusun->name.' '.$row->user->tower->name,
            $row->rating_layanan,
            $row->rating_kecepatan,
            $row->rating_kualitas
        ];
    }
}
