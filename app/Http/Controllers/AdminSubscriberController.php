<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubscriberRequest;
use App\Models\Subscriber;

class AdminSubscriberController extends Controller
{

    public function showSubscribers()
    {
        $subscribers = Subscriber::all();
        return view('admin.subscribers.show_subscribers', compact('subscribers'));
    }



    public function deleteTag($id)
    {
        Subscriber::find($id)->delete();
        return back();
    }
}

