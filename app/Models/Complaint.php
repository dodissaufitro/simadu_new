<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
class Complaint extends Model
{
    use SoftDeletes;

    protected $guarded = [
        'id',
    ];

    public function Rusun()
    {
        return $this->belongsTo(Rusun::class);
    }
    public function User()
    {
        return $this->belongsTo(User::class);
    }
    public function UserVerified()
    {
        return $this->belongsTo(User::class);
    }
}
