<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\IndexController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\PostController;

Route::get('/', IndexController::class);
Route::get('/category/{slug}', CategoryController::class);
Route::get('/tag/{slug}', TagController::class);
Route::get('/post/{slug}', [PostController::class, 'show']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/search', [PostController::class, 'search']);
