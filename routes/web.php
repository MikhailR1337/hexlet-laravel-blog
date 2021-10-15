<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class, 'welcome'])
    ->name('welcome');

Route::get('/about', [PageController::class, 'about'])
    ->name('about');

Route::get('articles', [ArticleController::class, 'index'])
  ->name('articles.index');

Route::get('articles/{id}', [ArticleController::class, 'show'])
    ->name('articles.show');