<?php

namespace App\Http\Controllers;

use App\Http\Requests\FilterRequest;
use App\Models\Category;
use App\Models\Service;


class PageController extends Controller
{
    public function index()
    {
        $services = Service::all();
        $categories = Category::all();
        return view('index', compact('services', 'categories'));
    }



    public function showService (Service $service) {

            $categories = \App\Models\Category::all();

            return view('services.service', compact('service', 'categories'));
    }

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
