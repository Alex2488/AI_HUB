<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Service;




class PageController extends Controller
{
    public function index()
    {
//        $services = Service::latest()->take(3)->get();
        $services = Service::orderBy('liked_users_count', 'desc')->take(3)->get();
        $categories = Category::all();
        return view('index', compact('services', 'categories'));
    }

    public function showServices()
    {





        return view('services.services', [
            'services' => Service::latest()->filter(\request(['search', 'category']))
                ->paginate(10)->withQueryString(),
            'categories' => Category::all(),

        ]);
    }



    public function showService (Service $service) {


        $services_alt = Service::where('category_id', $service->category->id)->inRandomOrder()->take(3)->get();

            $categories = \App\Models\Category::all();



            return view('services.service', compact('service', 'categories', 'services_alt'));
    }




    public function showAbout (){
        return view('about');
    }

    public function showNews (){
        return view('news');
    }

    public function showPosts (){

        $posts = Post::all();

        return view('posts.posts', compact('posts'));
    }

    public function showPost (Post $post){


        return view('posts.post', compact('post'));
    }


}
