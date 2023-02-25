<?php

use Illuminate\Support\Facades\File;
use App\Models\Ai_service;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $content_ai = \App\Models\Ai_service::all();

    return view('index', [
        'content_ai' => $content_ai
    ]);

});


Route::get('contents/{ai_service:slug}', function (Ai_service $ai_service) {


    return view('content_ai', [
        'content_ai' => $ai_service
    ]);

});

Route::get('categories/{category}', function (\App\Models\Category $category) {

    return view('content_ai', [

        'content_ai' => $category


    ]);

});
