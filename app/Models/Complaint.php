<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Complaint extends Model
{
    use SoftDeletes,HasFactory;

    protected $guarded = [
        'id',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($complaint) {
            if (auth()->check() && auth()->user()->hasRole('user')) {
                $complaint->unit_id = auth()->user()->unit->id;
                $complaint->user_id = auth()->user()->id;
            }
            if (auth()->check() && auth()->user()->hasRole('petugas')) {
                $complaint->user_verified = auth()->user()->id;
            }
        });

        static::updating(function ($complaint) {

            if (auth()->check() && auth()->user()->hasRole('petugas')) {
                $complaint->user_verified = auth()->user()->id;
            }

            // if($complaint->status == 'finished') {
            //     Penilaian::create([
            //         'complaint_id' => $complaint->id,
            //         'user_id' => $complaint->user_id,
            //         'rating_pelayanan' => $complaint->rating_pelayanan,
            //         'rating_kualitas' => $complaint->rating_kualitas,
            //         'rating_kecepatan' => $complaint->rating_kecepatan,
            //     ]);
            // }
        });
    }

    public function Rusun()
    {
        return $this->belongsTo(Rusun::class);
    }
    public function Unit()
    {
        return $this->belongsTo(Unit::class);
    }
    public function User()
    {
        return $this->belongsTo(User::class);
    }
    public function Verified()
    {
        return $this->belongsTo(User::class);
    }

}
