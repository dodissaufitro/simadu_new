<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
// use Illuminate\Support\Str;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, HasRoles,SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    // protected $fillable = [
    //     'name',
    //     'email',
    //     'password',
    // ];


    protected static function boot()
    {
        parent::boot();

        // static::creating(function ($user) {
        //     if (!$user->roles) {
        //         $user->roles='user';
        //     }
        // });
        static::created(function ($user) {
            $user->assignRole('user');
            // if (!$user->hasRoles()) {
            // }
        });
    }


    protected $guarded = [
        'id',
    ];



    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];


    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    public function unit()    {
        return $this->belongsTo(Unit::class);
    }
    public function complaints()
    {
        return $this->hasMany(Complaint::class);
    }
    public function complaints2()
    {
        return $this->hasMany(Complaint::class,'user_verified');
    }

    // {
    //     return $this->belongsTo(Rusun::class);
    // }

    // public function rusun()
    // {
    //     return $this->belongsTo(Rusun::class);
    // }
}
