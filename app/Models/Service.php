<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'slug', 'title', 'logo_link','link_to_service','category_id','excerpt','information_1','information_2','information_3','functionality_1','functionality_2','functionality_3','functionality_4','benefits_1','benefits_2','benefits_3',
    ];

    protected $withCount = ['likedUsers'];



    public function category () {
        return $this -> belongsTo(Category::class);

    }

    public function comments (){
        return $this->hasMany(Comment::class);
    }

    public function likedUsers() {
        return $this->belongsToMany(User::class, 'service_user_likes', 'service_id', 'user_id');
    }








}
