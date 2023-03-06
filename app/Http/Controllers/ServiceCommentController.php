<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Termwind\Components\Dd;

class ServiceCommentController extends Controller
{
    public function store (Service $service, Request $request)    {



        \request()->validate([
            'body'=>'required'
        ]);

        $service->comments()->create([
            'user_id'=>\request()->user()->id,
            'service_id'=>\request('service_id'),
            'body'=>\request('body'),

        ]);

        return back();
    }
}
