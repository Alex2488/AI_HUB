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
Route::get('services', [\App\Http\Controllers\ServiceController::class, 'index'])->name('services');
Route::get('services/{service:slug}', [\App\Http\Controllers\PageController::class, 'showService'])->name('show-service');

Route::get('category/{category:slug}', function (\App\Models\Category $category) {
    return view('services.services', [
       'services' => $category->services,
        'categories' => \App\Models\Category::all()
    ]);
});



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





Route::group(['prefix' => 'admin',  'middleware' => 'admin'], function()
{
    Route::controller(\App\Http\Controllers\AdminServiceController::class)->group(function () {
        Route::get('services','showServices')->name('show-services');
        Route::get('add-service', 'showCreate')->name('add-service');
        Route::post('add-service/submit-service', 'create')->name('submit-service');
        Route::get('services/{service:slug}/edit', 'showEdit')->name('edit-service');
        // patch? post?
        Route::get('services/{service:slug}/update', 'update')->name('update-service');
        Route::delete('services/{service:slug}', 'delete')->name('delete-service');
    });


    Route::get('users', [\App\Http\Controllers\AdminUserController::class, 'showUsers'])->name('show-users');
    Route::get('edit-user/{user:name}', [\App\Http\Controllers\AdminUserController::class, 'showEditUser'])->name('edit-user');
    Route::post('edit-user/{user:name}/update-user', [\App\Http\Controllers\AdminUserController::class, 'updateUser'])->name('update-user');
    Route::delete('delete-user/{user:name}', [\App\Http\Controllers\AdminUserController::class, 'deleteUser'])->name('delete-user');

    Route::get('show-categories', [\App\Http\Controllers\AdminCategoryController::class, 'showCategories'])->name('show-categories');
    Route::get('add-category', [\App\Http\Controllers\AdminCategoryController::class, 'showAddCategory'])->name('add-category');
    Route::post('add-category/submit-category', [\App\Http\Controllers\AdminCategoryController::class, 'addCategory'])->name('submit-category');
    Route::get('edit-category/{category:id}', [\App\Http\Controllers\AdminCategoryController::class, 'showEditCategory'])->name('edit-category');
    // patch? post?

    Route::get('edit-category/{category:id}/update-category', [\App\Http\Controllers\AdminCategoryController::class, 'updateCategory'])->name('update-category');
    Route::delete('delete-category/{category:id}', [\App\Http\Controllers\AdminCategoryController::class, 'deleteCategory'])->name('delete-category');
});

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');




