<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Rusun extends Model
{
    use SoftDeletes;

    protected $guarded = [
        'id',
    ];

    public function User()
    {
        return $this->hasMany(User::class);
    }
    public function UserVerified()
    {
        return $this->hasMany(User::class);
    }
    public function Complaints()
    {
        return $this->hasMany(Complaint::class);
    }

}
