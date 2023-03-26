<?php

namespace App\Models;


use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Auth\Events\Registered;



class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;



    const ROLE_ADMIN = 0;
    const ROLE_READER = 1;

  /*  public static function getRoles () {
        return [
            self::ROLE_ADMIN => 'Aдміністратор',
            self::ROLE_READER => 'Користувач'
        ];
    }*/

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setPasswordAttribute($password) {
        $this->attributes['password'] = bcrypt($password);
    }

    public function services() {
        return $this->hasMany(Service::class);

    }

    public function likedServices () {
        return $this->belongsToMany(Service::class, 'service_user_likes', 'user_id', 'service_id');
    }



}
