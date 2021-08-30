<?php

use App\http\Controllers\PostController;
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

Route::get('/', function () {
    return view('welcome');
});

// Going to localhost/posts
Route::get('/posts', [PostController::class, 'index']);

// Going to create page
Route::get('/posts/create', [PostController::class, 'create']);

// when creating a post this points the the store method
Route::post('/posts', [PostController::class, 'store']);

// going to edit page
Route::get('/posts/{post}/edit', [PostController::class, 'edit']);

//Route to deleting a post
Route::delete('posts/{post}', [PostController::class, 'destroy']);


Route::put('/posts/{post}', [PostController::class, 'update']);