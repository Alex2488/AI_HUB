<?php

use Illuminate\Support\Facades\File;
use App\Models\Service;
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

    return view('index', ['services' => Service::with ('category') -> get()]);

})->name('home');


Route::get('services/{ai_service:slug}', function (Service $ai_service) {

    return view('service', ['service' => $ai_service]);

});

Route::post('services/{ai_service:slug}/comments', [\App\Http\Controllers\ServiceCommentController::class, 'store']);

Route::get('categories/text', function (\App\Models\Category $category) {

    return view('index', [

        'content_ai' => $category

    ]);

});

Route::get('blog', [\App\Http\Controllers\ServiceController::class, 'showBlog'])->name('blog');

Route::get('news', [\App\Http\Controllers\ServiceController::class, 'showNews'])->name('news');

Route::get('about', [\App\Http\Controllers\ServiceController::class, 'showAbout'])->name('about');

Route::get('services', [\App\Http\Controllers\ServiceController::class, 'allDataServices'])->name('services');

Route::get('panel/add-service', fn () => view('add-service'))->name('add-service');

Route::post('panel/add-service/submit-service', [\App\Http\Controllers\ServiceController::class, 'addService'])->name('submit-service');

Route::get('panel/edit-service/{dataService:slug}', [\App\Http\Controllers\ServiceController::class, 'showService'])->name('edit-service');

Route::post('panel/edit-service/{dataService:slug}/update-service', [\App\Http\Controllers\ServiceController::class, 'updateService'])->name('update-service');

Route::delete('panel/delete-service/{dataService:slug}', [\App\Http\Controllers\ServiceController::class, 'deleteService'])->name('delete-service');

Route::get('register', [\App\Http\Controllers\RegisterController::class, 'create'])->name('register')->middleware('guest');
Route::post('register', [\App\Http\Controllers\RegisterController::class, 'store'])->name('register-store')->middleware('guest');

Route::get('login', [\App\Http\Controllers\SessionsController::class, 'create'])->name('login')->middleware('guest');
Route::post('sessions', [\App\Http\Controllers\SessionsController::class, 'store'])->name('sessions')->middleware('guest');

Route::post('logout', [\App\Http\Controllers\SessionsController::class, 'destroy'])->name('logout')->middleware('auth');
