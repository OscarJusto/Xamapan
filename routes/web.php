<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;

use App\Http\Controllers\PostController;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

Route::get('/', [HomeController::class, 'index'])->name('xamapa.index');
Route::get('/xamapan', [HomeController::class, 'show'])->name('xamapa.show');
Route::get('/xamapan_data', [HomeController::class, 'data'])->name('xamapa.data');

// Este es para restringir que los usuarios puedan registrarse
Auth::routes(['register'=>false,'reset'=>false, 'verify'=>false]);
//Auth::routes();

// Este es para pedir autenticacion cada vez que solicitas accesder a las vistas de eventos
// Route::resource('eventos', EventController::class)->middleware('auth');

// Route::resource('eventos', EventController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('/category/{category}', [PostController::class, 'category'])->name('posts.category');
Route::get('/tag/{tag}', [PostController::class, 'tag'])->name('posts.tag');

// posts.index', 'posts.show', 'posts.category', '/eventos
view::composer(['posts.index', 'posts.show', 'posts.category', 'posts.tag'], function ($view) {
    $categories = Category::All();
    $view->with('categories', Category::All());
    
});