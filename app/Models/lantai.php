<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class lantai extends Model
{
    /** @use HasFactory<\Database\Factories\LantaiFactory> */
    use SoftDeletes,HasFactory;

    protected $guarded = [
        'id',
    ];

    public function Tower()
    {
        return $this->belongsTo(Tower::class);
    }
    public function Unit()
    {
        return $this->hasMany(Unit::class);
    }
}
