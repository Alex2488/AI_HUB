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

Route::get('/', [\App\Http\Controllers\PageController::class, 'index'])->name('home');
Route::get('services', [\App\Http\Controllers\PageController::class, 'allServices'])->name('services');


Route::get('services/{service:slug}', [\App\Http\Controllers\PageController::class, 'showService'])->name('show-service');

/*Route::get('service/{service:slug}', function (Service $service) {

    $categories = \App\Models\Category::all();

    return view('service', ['service' => $service, 'categories' => $categories]);

});*/



Route::post('service/comments', [\App\Http\Controllers\ServiceCommentController::class, 'store'])->name('add-comment');

Route::get('categories/text', function (\App\Models\Category $category) {

    return view('index', [

        'content_ai' => $category

    ]);

});

Route::get('blog', [\App\Http\Controllers\ServiceController::class, 'showBlog'])->name('blog');

Route::get('news', [\App\Http\Controllers\ServiceController::class, 'showNews'])->name('news');

Route::get('about', [\App\Http\Controllers\ServiceController::class, 'showAbout'])->name('about');

//Route::get('service',  [\App\Http\Controllers\ServiceController::class, 'allServices'])->name('service');

Route::post('service/{service:slug}/likes', [\App\Http\Controllers\LikeController::class, 'addLike'])->name('add-like');



Route::get('add-category', [\App\Http\Controllers\CategoryController::class, 'showAddCategory'])->name('add-category');
Route::post('add-category/submit-category', [\App\Http\Controllers\CategoryController::class, 'addCategory'])->name('submit-category');
Route::get('edit-category/{dataService:slug}', [\App\Http\Controllers\CategoryController::class, 'showCategory'])->name('edit-category');
Route::post('edit-category/{dataService:slug}/update-category', [\App\Http\Controllers\CategoryController::class, 'updateCategory'])->name('update-category');
Route::delete('delete-category/{dataService:slug}', [\App\Http\Controllers\CategoryController::class, 'deleteCategory'])->name('delete-category');


Route::group(['prefix' => 'admin',  'middleware' => 'admin'], function()
{
    Route::get('services',  [\App\Http\Controllers\ServiceController::class, 'showServices'])->name('show-services');
    Route::get('add-service', [\App\Http\Controllers\ServiceController::class, 'showAddService'])->name('add-service');
    Route::post('add-service/submit-service', [\App\Http\Controllers\ServiceController::class, 'addService'])->name('submit-service');
    Route::get('edit-service/{service:slug}', [\App\Http\Controllers\ServiceController::class, 'showEditService'])->name('edit-service');
    Route::post('edit-service/{service:slug}/update-service', [\App\Http\Controllers\ServiceController::class, 'updateService'])->name('update-service');
    Route::delete('delete-service/{service:slug}', [\App\Http\Controllers\ServiceController::class, 'deleteService'])->name('delete-service');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'showUsers'])->name('show-users');
    Route::get('edit-user/{user:name}', [\App\Http\Controllers\UserController::class, 'showEditUser'])->name('edit-user');
    Route::post('edit-user/{user:name}/update-user', [\App\Http\Controllers\UserController::class, 'updateUser'])->name('update-user');
    Route::delete('delete-user/{user:name}', [\App\Http\Controllers\UserController::class, 'deleteUser'])->name('delete-user');

    Route::get('show-categories', [\App\Http\Controllers\CategoryController::class, 'showCategories'])->name('show-categories');

});



















Route::get('register', [\App\Http\Controllers\RegisterController::class, 'create'])->name('register')->middleware('guest');
Route::post('register', [\App\Http\Controllers\RegisterController::class, 'store'])->name('register-store')->middleware('guest');

Route::get('login', [\App\Http\Controllers\SessionsController::class, 'create'])->name('login')->middleware('guest');
Route::post('sessions', [\App\Http\Controllers\SessionsController::class, 'store'])->name('sessions')->middleware('guest');

Route::post('logout', [\App\Http\Controllers\SessionsController::class, 'destroy'])->name('logout')->middleware('auth');



