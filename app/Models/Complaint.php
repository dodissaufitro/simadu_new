<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Complaint extends Model
{
    use SoftDeletes, HasFactory;

    protected $guarded = [
        'id',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($complaint) {
            if (auth()->check() && auth()->user()->hasRole('user')) {
                $complaint->unit_id = auth()->user()->unit_id;
                $complaint->tower_id = auth()->user()->tower_id;
                $complaint->user_id = auth()->user()->id;
            }

            if (auth()->check() && auth()->user()->hasRole('super_admin')) {
                $user = User::find($complaint->user_id);
                $complaint->unit_id = $user?->unit_id ?? 1;
                $complaint->tower_id = $user?->tower_id ?? 1;
            }


            if (auth()->check() && auth()->user()->hasRole('koordinator')) {
                $user = auth()->user();

                $complaint->unit_id  = $user->unit_id ?? 1;
                $complaint->tower_id = $user->tower_id ?? 1;
                $complaint->user_id  = $user->id;
            }
        });

        static::updating(function ($complaint) {
            if (auth()->check() && auth()->user()->hasRole('koordinator')) {
                // $complaint->unit_id = auth()->user()->unit->id;
                $complaint->koor_id = auth()->user()->id;
            }
        });

        // static::updated(function($complaint){
        //     if (auth()->check() && auth()->user()->hasRole('teknisi')) {
        //         $totalTeknisi = TeknisiOnComplaint::where('complaint_id','=',$complaint->id)->count();
        //         $totalTeknisiAccept = TeknisiOnComplaint::where('complaint_id','=',$complaint->id)->where('status','=','accept')->count();
        //         $totalImageUpload = TeknisiOnComplaint::where('complaint_id','=',$complaint->id)->where('image','!=','')->count();

        //         if($complaint->status=='pending' && $totalTeknisi == $totalTeknisiAccept  )
        //         {
        //             Complaint::updated([
        //                 'status'=>'accept'
        //             ]);
        //         }
        //         if($complaint->status=='accept' && $totalTeknisi == $totalImageUpload  )
        //         {
        //             Complaint::updated([
        //                 'status'=>'finish'
        //             ]);
        //         }

        //     }
        // });
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
    public function koor()
    {
        return $this->belongsTo(User::class);
    }
    public function TeknisiOnComplaint()
    {
        return $this->hasMany(TeknisiOnComplaint::class, 'complaint_id');
    }
}
