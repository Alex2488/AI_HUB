<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class ServiceUserLike extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id',
        'user_id',
    ];



    public function service () {
        return $this->belongsTo(Service::class, 'service_id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}

