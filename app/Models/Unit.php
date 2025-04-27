<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Unit extends Model
{
    /** @use HasFactory<\Database\Factories\UnitFactory> */
    use SoftDeletes,HasFactory;

    protected $guarded = [
        'id',
    ];

    public function Lantai()
    {
        return $this->belongsTo(Lantai::class);
    }
    public function User()
    {
        return $this->hasMany(User::class);
    }
    public function Complaint()
    {
        return $this->hasMany(Complaint::class);
    }
}
