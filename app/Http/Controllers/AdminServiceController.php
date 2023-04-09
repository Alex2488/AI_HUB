<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceRequest;
use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class AdminServiceController extends Controller
{
    public function showServices ()
    {
        $services = Service::all();
        $categories = Category::all();
        return view('admin.service.show_services', compact('services','categories'));
    }


    public function showCreate () {

        $categories = Category::all();
        return view('admin.service.add-service', compact('categories'));
    }

    public function create(Request $r)
    {
//        $logoImage = $r->logo;
//        $logoPath = Storage::put('/public/image', $logoImage);
//
//        $image = $r->image;
//        $imagePath = Storage::put('public/image', $image );
//
//        $service = new Service;
//        $service->title = $r->title;
//        $service->slug = Str::slug($r->title);
//        $service->logo = $logoPath;
//        $service->image = $imagePath;
//        $service->link_to_service = $r->link_to_service;
//        $service->excerpt = $r->excerpt;
//        $service->main_content = $r->main_content;
//        $service->developer = $r->developer;
//        $service->release_date = $r->release_date;
//        $service->is_published = $r->is_published;
//        $service->category_id = $r->category_id;
//
//
//
//        $service->save();


        $attributes = request()->validate([
            'title' => 'required',
            'image' => 'required|image',
            'logo' => 'required|image',
            'link_to_service' => 'required',
            'excerpt' => 'required',
            'main_content' => 'required',
            'developer' => 'required',
            'release_date' => 'required',
            'is_published' => 'required',
            'category_id' => ['required', Rule::exists('categories', 'id')],
        ]);

        $attributes['logo'] = Storage::put('/public/image', $r->logo);
        $attributes['image'] = Storage::put('/public/image', $r->image);
        $attributes['slug'] = Str::slug($r->title);

        Service::create($attributes);

        return redirect()->route('show-services')->with('success', 'Новий сервіс збережено');

    }

    public function showEdit ($id)
    {
        $service = Service::find($id);
        $categories = Category::all();
        return view('admin.service.edit_service', compact('service', 'categories'));
    }


    public function update($id, ServiceRequest $request)
    {

//        $service = Service::find($id);
//
//        $logoImage = $r->logo;
//        $logoPath = Storage::put("/public/storage/{$service->slug}", $logoImage);
//
//        $image = $r->image;
//        $imagePath = Storage::put("/public/storage/{$service->slug}", $image );
//
//
//
//        $service->title = $r->title;
//        $service->slug = $r->slug;
//        $service->logo = $logoPath;
//        $service->image = $imagePath;
//        $service->link_to_service = $r->link_to_service;
//        $service->excerpt = $r->excerpt;
//        $service->content = $r->main_content;
//        $service->developer = $r->developer;
//        $service->release_date = $r->release_date;
//        $service->is_published = $r->is_published;
//        $service->category_id = $r->category_id;
//
//        $service->save();


        $attributes = request()->validate([
            'title' => 'required',
            'link_to_service' => 'required',
            'slug' => ['required', Rule::unique('services', 'id')->ignore($service->slug)],
            'excerpt' => 'required',
            'image' => 'required',
            'logo' => 'required',
            'main_content' => 'required',
            'developer' => 'required',
            'release_date' => 'required',
            'is_published' => 'required',
            'category_id' => ['required', Rule::exists('categories', 'id')],

        ]);




//        $attributes['logo'] = Storage::put('/public/storage/image', $service->logo);
//        $attributes['image'] = Storage::put('/public/storage/image', $service->image);
       $attributes['logo'] = \request()->file('logo')->store('logo');
       $attributes['image'] = \request()->file('image')->store('image');





        $service->update($attributes);

        return redirect()->route('show-services')->with('success', 'Зміни збережені');


    }

    public function delete($id)
    {
        Service::find($id)->delete();

        return back();

    }
}
