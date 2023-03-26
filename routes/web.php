<?php

use Illuminate\Support\Facades\File;
use App\Models\Service;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can auth web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\Controllers\PageController::class, 'index'])->name('home')->middleware(['verified']);
Route::get('services', [\App\Http\Controllers\PageController::class, 'allServices'])->name('services');
Route::get('services/{service:slug}', [\App\Http\Controllers\PageController::class, 'showService'])->name('show-service');
Route::get('blog', [\App\Http\Controllers\PageController::class, 'showBlog'])->name('blog');
Route::get('news', [\App\Http\Controllers\PageController::class, 'showNews'])->name('news');
Route::get('about', [\App\Http\Controllers\PageController::class, 'showAbout'])->name('about');

Route::post('service/comments', [\App\Http\Controllers\ServiceCommentController::class, 'store'])->name('add-comment');
Route::post('service/{service:slug}/likes', [\App\Http\Controllers\LikeController::class, 'addLike'])->name('add-like');

/*Route::get('categories/text', function (\App\Models\Category $category) {

    return view('index', [

        'content_ai' => $category

    ]);

});*/

Route::middleware(['auth', 'verified'])->get('/verify', function () {
    return view('verify-email');
});



Route::group(['prefix' => 'admin',  'middleware' => 'admin'], function()
{
    Route::controller(\App\Http\Controllers\AdminServiceController::class)->group(function () {
        Route::get('services','showServices')->name('show-services');
        Route::get('add-service', 'showAddService')->name('add-service');
        Route::post('add-service/submit-service', 'addService')->name('submit-service');
        Route::get('edit-service/{service:slug}', 'showEditService')->name('edit-service');
        Route::post('edit-service/{service:slug}/update-service', 'updateService')->name('update-service');
        Route::delete('delete-service/{service:slug}', 'deleteService')->name('delete-service');
    });


    Route::get('users', [\App\Http\Controllers\AdminUserController::class, 'showUsers'])->name('show-users');
    Route::get('edit-user/{user:name}', [\App\Http\Controllers\AdminUserController::class, 'showEditUser'])->name('edit-user');
    Route::post('edit-user/{user:name}/update-user', [\App\Http\Controllers\AdminUserController::class, 'updateUser'])->name('update-user');
    Route::delete('delete-user/{user:name}', [\App\Http\Controllers\AdminUserController::class, 'deleteUser'])->name('delete-user');

    Route::get('show-categories', [\App\Http\Controllers\AdminCategoryController::class, 'showCategories'])->name('show-categories');
    Route::get('add-category', [\App\Http\Controllers\AdminCategoryController::class, 'showAddCategory'])->name('add-category');
    Route::post('add-category/submit-category', [\App\Http\Controllers\AdminCategoryController::class, 'addCategory'])->name('submit-category');
    Route::get('edit-category/{dataService:slug}', [\App\Http\Controllers\AdminCategoryController::class, 'showCategory'])->name('edit-category');
    Route::post('edit-category/{dataService:slug}/update-category', [\App\Http\Controllers\AdminCategoryController::class, 'updateCategory'])->name('update-category');
    Route::delete('delete-category/{dataService:slug}', [\App\Http\Controllers\AdminCategoryController::class, 'deleteCategory'])->name('delete-category');
});

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');




