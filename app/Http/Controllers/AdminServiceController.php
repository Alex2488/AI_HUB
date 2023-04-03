<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminServiceController extends Controller
{
    public function showServices ()
    {
        $services = Service::all();
        $categories = Category::all();
        return view('admin.service.show_services', compact('services','categories'));
    }


    public function showAddService () {

        $categories = Category::all();
        return view('admin.service.add-service', compact('categories'));
    }

    public function addService(Request $r)
    {
        $logoImage = $r->logo;
        $logoPath = Storage::put('/public/image', $logoImage);

        $image = $r->image;
        $imagePath = Storage::put('public/image', $image );

        $service = new Service;
        $service->title = $r->title;
        $service->slug = Str::slug($r->title);
        $service->logo = $logoPath;
        $service->image = $imagePath;
        $service->link_to_service = $r->link_to_service;
        $service->excerpt = $r->excerpt;
        $service->content = $r->main_content;
        $service->developer = $r->developer;
        $service->release_date = $r->release_date;
        $service->is_published = '0';
        $service->category_id = $r->category_id;

        $service->save();

        return redirect()->route('show-services');

    }

    public function showEditService($id)
    {
        $service = Service::find($id);
        $categories = Category::all();
        return view('admin.service.edit_service', compact('service', 'categories'));
    }


    public function updateService($id, Request $r)
    {

        $service = Service::find($id);
        $service->title = $r->title;
        $service->slug = $r->slug;
        $service->logo_link = $r->logo_link;
        $service->link_to_service = $r->link_to_service;
        $service->excerpt = $r->excerpt;
        $service->information_1 = $r->information_1;
        $service->information_2 = $r->information_2;
        $service->information_3 = $r->information_3;
        $service->functionality_1 = $r->functionality_1;
        $service->functionality_2 = $r->functionality_2;
        $service->functionality_3 = $r->functionality_3;
        $service->functionality_4 = $r->functionality_4;
        $service->benefits_1 = $r->benefits_1;
        $service->benefits_2 = $r->benefits_2;
        $service->benefits_3 = $r->benefits_3;
        $service->category_id = $r->category_id;



        $service->title = $r->title;
        $service->slug = Str::slug($r->title);
//        $service->logo = $logoPath;
//        $service->image = $imagePath;
        $service->link_to_service = $r->link_to_service;
        $service->excerpt = $r->excerpt;
        $service->content = $r->main_content;
        $service->developer = $r->developer;
        $service->release_date = $r->release_date;
        $service->is_published = '0';
        $service->category_id = $r->category_id;




        $service->save();

        return redirect()->route('service', $id);

    }

    public function deleteService($id)
    {
        Service::find($id)->delete();

        return back();

    }
}
