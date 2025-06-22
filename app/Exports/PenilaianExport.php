<?php

namespace App\Exports;

use App\Models\Penilaian;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class PenilaianExport implements FromCollection, WithHeadings, WithMapping
{
    /**
     * @return \Illuminate\Support\Collection
     */

    protected $tglTempoFrom;
    protected $tglTempoUntil;
    protected $rusun;
    protected $tower;

    public function __construct($tglTempoFrom = null, $tglTempoUntil = null, $rusun = null, $tower = null)
    {
        $this->tglTempoFrom = $tglTempoFrom;
        $this->tglTempoUntil = $tglTempoUntil;
        $this->rusun = $rusun;
        $this->tower = $tower;
    }

    public function collection()
    {

        $query = Penilaian::select([
            'penilaians.*',
            'us.name as user_name',
            'rs.name as rusun_name',
            'tw.name as tower_name'
        ])
            ->leftJoin('towers as tw', 'penilaians.tower_id', '=', 'tw.id')
            ->leftJoin('users as us', 'penilaians.user_id', '=', 'us.id')
            ->leftJoin('users as kr', 'penilaians.koor_id', '=', 'kr.id')
            ->leftJoin('rusuns as rs', 'kr.rusun_id', '=', 'rs.id');

        if ($this->tglTempoFrom) {
            $query->whereDate('penilaians.created_at', '>=', $this->tglTempoFrom);
        }

        if ($this->tglTempoUntil) {
            $query->whereDate('penilaians.created_at', '<=', $this->tglTempoUntil);
        }

        if ($this->rusun) {
            $query->where('kr.rusun_id', '=', $this->rusun);
        }

        if ($this->tower) {
            $query->where('kr.tower_id', '=', $this->tower);
        }

        return $query->get();
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
            $row->user_name,
            $row->user->rusun_name . '-' . $row->user->tower_name,
            $row->rating_layanan,
            $row->rating_kecepatan,
            $row->rating_kualitas
        ];
    }
}
