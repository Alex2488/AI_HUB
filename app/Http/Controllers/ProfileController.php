<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Service;
use App\Models\Service_view;
use App\Models\ServiceUserLike;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{

    public function editProfile()
    {
        $user = User::where('id', auth()->user()->id)->first();

        return view('user.user-profile', compact('user'));
    }



    public function profileUpdate(UserRequest $request)
    {


        $user = User::find(auth()->user()->id);
        $user->name = $request->name;
        if ($request->avatar) {
            $avatar = $request->avatar;
            $avatarPath = Storage::put('public/avatar', $avatar);
            $user->avatar = $avatarPath;
        }

        $user->save();

        return redirect()->route('edit-profile')->with('success', 'Зміни збережені');
    }



    public function favoriteServices()
    {
        $favoriteServices = ServiceUserLike::where('user_id', auth()->user()->id)->get();

        $services = Service::filter(\request(['search', 'category', 'tags']));

        if(request('sort') ==='title' ) {
            $services = $services->orderBy('title', 'asc');
        }

        if(request('sort') === 'date_up') {
            $services = $services->orderBy('created_at', 'asc');
        }

        if(request('sort') === 'date_down') {
            $services = $services->orderBy('created_at', 'desc');
        }

        $services = $services->paginate(5);

        $categories = Category::all();

        return view('user.favorite-services', compact('services','favoriteServices', 'categories'));
    }

    public function reviewedServices()
    {
        $reviewedServices = Service_view::where('user_id', auth()->user()->id)->get();


        $services = Service::filter(\request(['search', 'category', 'tags']));

        if(request('sort') ==='title' ) {
            $services = $services->orderBy('title', 'asc');
        }

        if(request('sort') === 'date_up') {
            $services = $services->orderBy('created_at', 'asc');
        }

        if(request('sort') === 'date_down') {
            $services = $services->orderBy('created_at', 'desc');
        }

        $services = $services->paginate(5);

        $categories = Category::all();

        return view('user.reviewed-services', compact('services','reviewedServices', 'categories'));
    }

    public function commentedServices()
    {
        $commentedServices = Comment::where('user_id', auth()->user()->id)->get();

        $services = Service::filter(\request(['search', 'category', 'tags']));

        if(request('sort') ==='title' ) {
            $services = $services->orderBy('title', 'asc');
        }

        if(request('sort') === 'date_up') {
            $services = $services->orderBy('created_at', 'asc');
        }

        if(request('sort') === 'date_down') {
            $services = $services->orderBy('created_at', 'desc');
        }

        $services = $services->paginate(5);

        $categories = Category::all();

        return view('user.commented-services', compact('services','commentedServices', 'categories'));
    }
}
