<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubscriberRequest;
use App\Models\Subscriber;
use Carbon\Carbon;

class AdminSubscriberController extends Controller
{

    public function showSubscribers()
    {
        $subscribers = Subscriber::all();
        $subscribersToday = Subscriber::whereDate('created_at', Carbon::today())->get();
        $subscribersCurrentMonth = Subscriber::whereYear('created_at', Carbon::now()->year)
            ->whereMonth('created_at', Carbon::now()->month);
        return view('admin.subscribers.show_subscribers', compact('subscribers', 'subscribersToday', 'subscribersCurrentMonth'));
    }



    public function deleteTag($id)
    {
        Subscriber::find($id)->delete();
        return back();
    }
}

