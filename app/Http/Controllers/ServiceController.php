<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ServiceRequest;
use App\Models\Service;

class ServiceController extends Controller
{
    public function allDataServices()
    {

        $services = new Service();
        return view('admin', ['dataServices' => $services->where('category_id', '>', '0')->get()]);
    }

    public function addService(ServiceRequest $request)
    {

        $service = new Service;
        $service->title = $request->input('title');
        $service->slug = $request->input('slug');
        $service->logo_link = $request->input('logo_link');
        $service->link_to_service = $request->input('link_to_service');
        $service->excerpt = $request->input('excerpt');
        $service->information_1 = $request->input('information_1');
        $service->information_2 = $request->input('information_2');
        $service->information_3 = $request->input('information_3');
        $service->functionality_1 = $request->input('functionality_1');
        $service->functionality_2 = $request->input('functionality_2');
        $service->functionality_3 = $request->input('functionality_3');
        $service->functionality_4 = $request->input('functionality_4');
        $service->benefits_1 = $request->input('benefits_1');
        $service->benefits_2 = $request->input('benefits_2');
        $service->benefits_3 = $request->input('benefits_3');
        $service->category_id = $request->input('category_id');

        $service->save();

        return redirect()->route('home');

    }

    public function showService(Service $dataService)
    {

        return view('edit-service', ['dataService' => $dataService]);


    }

    public function updateService($id, ServiceRequest $request)
    {

        $service = Service::find($id);
        $service->title = $request->input('title');
        $service->slug = $request->input('slug');
        $service->logo_link = $request->input('logo_link');
        $service->link_to_service = $request->input('link_to_service');
        $service->excerpt = $request->input('excerpt');
        $service->body = $request->input('information_1');
        $service->body = $request->input('information_2');
        $service->body = $request->input('information_3');
        $service->body = $request->input('functionality_1');
        $service->body = $request->input('functionality_2');
        $service->body = $request->input('functionality_3');
        $service->body = $request->input('functionality_4');
        $service->body = $request->input('benefits_1');
        $service->body = $request->input('benefits_2');
        $service->body = $request->input('benefits_3');
        $service->category_id = $request->input('category_id');

        $service->save();

        return redirect()->route('allDataServices', $id);

    }

    public function deleteService($id)
    {
        Service::find($id)->delete();

        return back();

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
