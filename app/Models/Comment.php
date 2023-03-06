<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function service () {
        return $this->belongsTo(Service::class);
    }

    public function author() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
