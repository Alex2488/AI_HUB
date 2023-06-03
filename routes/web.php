<?php

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
Route::controller(\App\Http\Controllers\PageController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('services', 'showServices')->name('services');
    Route::get('services/{service:slug}', 'showService')->name('show-service');
    Route::get('posts', 'showPosts')->name('posts');
    Route::get('posts/{post:slug}', 'showPost')->name('show-post');
    Route::get('news', 'showNews')->name('news');
    Route::get('about', 'showAbout')->name('about');
});



Route::post('service/comments', [\App\Http\Controllers\ServiceCommentController::class, 'store'])->name('add-comment');
Route::post('service/{service:slug}/likes', [\App\Http\Controllers\LikeController::class, 'addLike'])->name('add-like');
Route::post('submit-subscriber', [\App\Http\Controllers\PageController::class, 'addSubscriber'])->name('submit-subscriber');

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::controller(\App\Http\Controllers\AdminServiceController::class)->group(function () {
        Route::get('services', 'index')->name('show-services');
        Route::get('add-service', 'create')->name('add-service');
        Route::post('add-service/submit-service', 'store')->name('submit-service');
        Route::get('services/{service:slug}/edit', 'edit')->name('edit-service');
        Route::post('services/{service:slug}/update', 'update')->name('update-service');
        Route::delete('services/{service:slug}', 'delete')->name('delete-service');
    });

    Route::controller(\App\Http\Controllers\AdminPostController::class)->group(function () {
        Route::get('posts', 'index')->name('show-posts');
        Route::get('add-post', 'create')->name('add-post');
        Route::post('add-post/submit-post', 'store')->name('submit-post');
        Route::get('posts/{post:slug}/edit', 'edit')->name('edit-post');
        Route::post('posts/{post:slug}/update', 'update')->name('update-post');
        Route::delete('posts/{post:slug}', 'delete')->name('delete-post');
    });

    Route::controller(\App\Http\Controllers\AdminUserController::class)->group(function () {
        Route::get('users', 'index')->name('show-users');
        Route::get('edit-user/{user:name}', 'edit')->name('edit-user');
        Route::post('edit-user/{user:name}/update-user', 'update')->name('update-user');
        Route::delete('delete-user/{user:name}','delete')->name('delete-user');
    });


    Route::controller(\App\Http\Controllers\AdminCategoryController::class)->group(function () {
        Route::get('show-categories', [\App\Http\Controllers\AdminCategoryController::class, 'showCategories'])->name('show-categories');
        Route::get('add-category', [\App\Http\Controllers\AdminCategoryController::class, 'showAddCategory'])->name('add-category');
        Route::post('add-category/submit-category', [\App\Http\Controllers\AdminCategoryController::class, 'addCategory'])->name('submit-category');
        Route::get('edit-category/{category:id}', [\App\Http\Controllers\AdminCategoryController::class, 'showEditCategory'])->name('edit-category');
        Route::post('edit-category/{category:id}/update-category', [\App\Http\Controllers\AdminCategoryController::class, 'updateCategory'])->name('update-category');
        Route::delete('delete-category/{category:id}', [\App\Http\Controllers\AdminCategoryController::class, 'deleteCategory'])->name('delete-category');
    });

    Route::controller(\App\Http\Controllers\AdminTagController::class)->group(function () {
        Route::get('show-tags', 'showTags')->name('show-tags');
        Route::get('add-tag', 'showAddTag')->name('add-tag');
        Route::post('add-tag/submit-tag', 'addTag')->name('submit-tag');
        Route::get('edit-tag/{tag:id}', 'showEditTag')->name('edit-tag');
        Route::post('edit-tag/{tag:id}/update-tag', 'updateTag')->name('update-tag');
        Route::delete('delete-tag/{tag:id}', 'deleteTag')->name('delete-tag');
    });

    Route::controller(\App\Http\Controllers\AdminSubscriberController::class)->group(function () {
        Route::get('show-subscribers', 'showSubscribers')->name('show-subscribers');

        Route::delete('delete-subscriber/{subscriber:id}', 'deleteSubscriber')->name('delete-subscriber');
    });

});

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');


Route::group(['prefix' => 'user', 'middleware' => 'auth'], function () {
    Route::controller(\App\Http\Controllers\ProfileController::class)->group(function () {
        Route::get('user-profile', 'editProfile')->name('edit-profile');
        Route::post('user-profile-update', 'profileUpdate')->name('profile-update');
        Route::get('reviewed-services', 'reviewedServices')->name('reviewed-services');
        Route::get('favorite-services', 'favoriteServices')->name('favorite-services');
        Route::get('commented-services', 'commentedServices')->name('commented-services');
    });
});


