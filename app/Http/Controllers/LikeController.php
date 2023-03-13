<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function addLike (Service $service) {

        auth()->user()->likedServices()->toggle($service->id);

        return redirect()->back();
    }
}
