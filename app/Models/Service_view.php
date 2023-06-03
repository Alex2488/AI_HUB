<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service_view extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'service_id', 'user_id', 'user_ip',
    ];

    public function service () {
        return $this->belongsTo(Service::class, 'service_id');
    }
}
