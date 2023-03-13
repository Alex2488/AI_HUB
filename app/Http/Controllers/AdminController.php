<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{















    public function showTags () {
        $tags = Tags::all();
        return view('admin.show_tags', compact('tags'));
    }
    public function showBlogs () {
        $blogs = Blogs::all();
        return view('admin.show_blogs', compact('blogs'));
    }



}
