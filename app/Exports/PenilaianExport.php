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
    protected $rusun;
    protected $tower;

    public function __construct($tglTempoFrom = null, $tglTempoUntil = null,$rusun=null,$tower=null)
    {
        $this->tglTempoFrom = $tglTempoFrom;
        $this->tglTempoUntil = $tglTempoUntil;
        $this->rusun= $rusun;
        $this->tower= $tower;
    }

    public function collection()
    {

        // $query = Complaint::select([
        //     'complaints.*',
        //     'us.name as user_name',
        //     'un.name as unit_name',
        //     'tw.name as tower_name',
        //     'kr.name as koor_name',
        //     'kr.rusun_id as rusun',
        //     'kr.tower_id as tower',
        // ])
        //     ->leftJoin('towers as tw', 'tw.id', '=', 'complaints.tower_id')
        //     ->leftJoin('units as un', 'un.id', '=', 'complaints.unit_id')
        //     ->leftJoin('users as us', 'us.id', '=', 'complaints.user_id')
        //     ->leftJoin('users as kr', 'kr.id', '=', 'complaints.koor_id')
        //     ;

        $query = Penilaian::select([
            'penilaians.*',
            'us.name as user_name',
            'rs.name as rusun_name',
            'tw.name as tower_name'
        ])
        ->leftJoin('towers as tw', 'penilaians.tower_id','=', 'tw.id')
        ->leftJoin('users as us', 'penilaians.user_id','=', 'us.id')
        ->leftJoin('users as kr', 'penilaians.koor_id','=', 'kr.id' )
        ->leftJoin('rusuns as rs', 'kr.rusun_id', '=', 'rs.id')
        ;

        if ($this->tglTempoFrom) {
            $query->whereDate('create_at', '>=', $this->tglTempoFrom);
        }

        if ($this->tglTempoUntil) {
            $query->whereDate('create_at', '<=', $this->tglTempoUntil);
        }

        if ($this->rusun) {
            $query->where('kr.rusun_id', '=', $this->rusun);
        }

        if ($this->tower) {
            $query->where('kr.tower_id', '=', $this->tower);
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
            $row->user_name,
            $row->user->rusun_name.'-'.$row->user->tower_name,
            $row->rating_layanan,
            $row->rating_kecepatan,
            $row->rating_kualitas
        ];
    }
}
