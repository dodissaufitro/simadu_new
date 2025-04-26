<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Penilaian extends Model
{
    use SoftDeletes;

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
