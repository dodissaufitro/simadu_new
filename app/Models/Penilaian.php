<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Penilaian extends Model
{
    use SoftDeletes,HasFactory;

    protected $guarded = [
        'id',
    ];
    public function Complaint()
    {
        return $this->belongsTo(Complaint::class);
    }
    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
