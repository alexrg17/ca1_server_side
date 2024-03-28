<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ArticleController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PagesController::class, 'index']);
Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');
Route::get('{id}/Createarticle', [ArticleController::class, 'Createarticle'])->name('Createarticleroute');
Route::get('{id}/showarticle',[ArticleController::class,'showarticle'])->name('showarticle');

Route::resource('/blog', PostsController::class);


Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/search', [PostsController::class, 'search'])->name('search');


