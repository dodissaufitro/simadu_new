<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tower extends Model
{
    /** @use HasFactory<\Database\Factories\TowerFactory> */
    use SoftDeletes,HasFactory;

    protected $guarded = [
        'id',
    ];

    public function Rusun()
    {
        return $this->belongsTo(Rusun::class);
    }
    public function Lantai()
    {
        return $this->hasMany(lantai::class);
    }
    public function User()
    {
        return $this->hasMany(User::class);
    }


}
