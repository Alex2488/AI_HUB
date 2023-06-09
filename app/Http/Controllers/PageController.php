<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubscriberRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Service;
use App\Models\Service_view;
use App\Models\Subscriber;


class PageController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('liked_users_count', 'desc')->take(3)->get();
        $categories = Category::all();
        $posts = Post::orderBy('created_at', 'desc')->take(3)->get();
        return view('index', compact('services', 'categories', 'posts'));
    }

    public function showServices()
    {
        $services = Service::filter(\request(['search', 'category', 'tags']));

        if (request('sort') === 'title') {
            $services = $services->orderBy('title', 'asc');
        }

        if (request('sort') === 'date_up') {
            $services = $services->orderBy('created_at', 'asc');
        }

        if (request('sort') === 'date_down') {
            $services = $services->orderBy('created_at', 'desc');
        }

        $services = $services->paginate(10);

        $categories = Category::all();

        return view('services.services', compact('services', 'categories'));


    }


    public function showService(Service $service, Service_view $service_view)
    {

        $isVieved = Service_view::where('service_id', $service->id)->where('user_id', auth()->id())->get();


        if (!$isVieved->count()) {
            $new_service_view = new Service_view();
            $new_service_view->service_id = $service->id;
            $new_service_view->user_id = auth()->id();
            $new_service_view->user_ip = \request()->ip();
            $new_service_view->save();
        }


        $services_alt = Service::where('category_id', $service->category->id)->where('id', '!=', $service->id)->inRandomOrder()->take(3)->get();

        $popular_posts = Post::orderBy('updated_at', 'desc')->take(3)->get();

        $categories = \App\Models\Category::all();

        if (isset($_GET['sort']) && !empty($_GET['sort'])) {

            if ($_GET['sort'] == 'a-z') {
                $service->orderBy('title', 'Asc');
            }
        }

        return view('services.service', compact('service', 'categories', 'services_alt', 'popular_posts'));
    }


    public function showAbout()
    {
        return view('about');
    }

    public function showPrivacy()
    {
        return view('privacy');
    }

    public function showPosts()
    {

        $posts = Post::orderBy('created_at', 'desc');;
        $services_random = Service::all()->random(4);

        $posts = $posts->paginate(10);


        return view('posts.posts', compact('posts', 'services_random'));
    }

    public function showPost(Post $post)
    {

        $services_random = Service::all()->random(2);
        $posts_alt = Post::where('id', '!=', $post->id)->inRandomOrder()->take(3)->get();

        return view('posts.post', compact('post', 'services_random', 'posts_alt'));
    }

    public function addSubscriber (SubscriberRequest $request)
    {

        $subscriber = new Subscriber();
        $subscriber->email= $request->email;

        $subscriber->save();

        return redirect()->route('home')->with('success', 'Ви підписались на AI-HUB');
    }


}
