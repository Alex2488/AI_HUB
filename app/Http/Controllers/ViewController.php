<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function showAbout (){
        return view('about');
    }

    public function showNews (){
        return view('news');
    }

    public function showBlog (){
        return view('blog');
    }

}
