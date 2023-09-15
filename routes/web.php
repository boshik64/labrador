<?php

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

//Route::get('/', function () {
////    return view('welcome');
//    return 'welcome';
//});
Route::get('/', [\App\Http\Controllers\MainController::class])->name('main.index');


Route::group(['namespace' => 'App\Http\Controllers\Post'], function () {
    Route::get('/posts', 'IndexController')->name('post.index');
    Route::get('/posts/create', 'CreateController')->name('post.create');

    Route::post('/posts/', 'StoreController')->name('post.store');
    Route::get('/posts/{post}', 'ShowController')->name('post.show');
    Route::get('/posts/{post}/edit', 'EditController')->name('post.edit');
    Route::patch('/posts/{post}/', 'UpdateController')->name('post.update');
    Route::delete('/posts/{post}/', 'DeleteController')->name('post.delete');
});


//Route::get('/posts/update', [\App\Http\Controllers\PostController::class, 'update']);
//Route::get('/posts/delete', [\App\Http\Controllers\PostController::class, 'delete']);
//Route::get('/posts/first_or_create', [\App\Http\Controllers\PostController::class, 'firstOrCreate']);
//Route::get('/posts/update_or_create', [\App\Http\Controllers\PostController::class, 'updateOrCreate']);

Route::get('/contacts', [\App\Http\Controllers\ContactsController::class, 'index'])->name('contacts.index');
Route::get('/about', [\App\Http\Controllers\AboutController::class, 'index'])->name('about.index');

//Auth::routes();
//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//
//Auth::routes();
//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//
//Auth::routes();
//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
