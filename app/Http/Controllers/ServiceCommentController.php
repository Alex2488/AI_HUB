<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceCommentController extends Controller
{
    public function store(Request $r)
    {



        \request()->validate([
            'body' => 'required'
        ]);

        $comment = new Comment();
        $comment->user_id = Auth::user()->id;
        $comment->service_id = $r->service_id;
        $comment->body = $r->body;

        $comment->save();


        return redirect()->back();

    }

}
