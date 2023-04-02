<?php

namespace App\Http\Controllers;

use App\Http\Requests\FilterRequest;
use App\Models\Category;

use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ServiceController extends Controller
{

    public function index()
    {




//        return Service::latest()->filter(\request(['search', 'category']))
//            ->paginate(1);

        return view('services.services', [
            'services' => Service::latest()->filter(\request(['search', 'category']))
                ->paginate(1)->withQueryString(),
            'categories' => Category::all(),

        ]);
    }











}
