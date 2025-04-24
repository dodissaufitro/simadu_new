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

}
