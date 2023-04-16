<?php

namespace App\Http\Controllers;

use App\Http\Requests\FilterRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Service;


class PageController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('liked_users_count', 'desc')->take(3)->get();
        $categories = Category::all();
        return view('index', compact('services', 'categories'));
    }

    public function showServices()
    {
        $services = Service::latest()->filter(\request(['search', 'category', 'tags']))
            ->paginate(10)->withQueryString();

        $categories = Category::all();

        return view('services.services', compact('services', 'categories'));

//        return view('services.services', [
//            'services' => Service::latest()->filter(\request(['search', 'category', 'tags']))
//                ->paginate(10)->withQueryString(),
//            'categories' => Category::all(),
//
//        ]);
    }



    public function showService (Service $service) {


        $services_alt = Service::where('category_id', $service->category->id)->where('id', '!=', $service->id)->inRandomOrder()->take(3)->get();

        $popular_posts = Post::orderBy('updated_at', 'desc')->take(3)->get();

        $categories = \App\Models\Category::all();

        return view('services.service', compact('service', 'categories', 'services_alt', 'popular_posts'));
    }




    public function showAbout (){
        return view('about');
    }

    public function showNews (){
        return view('news');
    }

    public function showPosts (){

        $posts = Post::all();
        $services_random = Service::all()->random(2);

        return view('posts.posts', compact('posts', 'services_random'));
    }

    public function showPost (Post $post){

        $services_random = Service::all()->random(2);

        return view('posts.post', compact('post', 'services_random'));
    }


}
