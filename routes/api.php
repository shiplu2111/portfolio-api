<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\HeroController;
use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\PostController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/heros', [HeroController::class, 'index']);
Route::get('/projects', [ProjectController::class, 'index']);
Route::get('/blogs', [PostController::class, 'index']);
Route::get('/blog/search', [PostController::class, 'search']);
Route::get('/blog/{post:slug}', [PostController::class, 'show']);
Route::post('/subscribe', [PostController::class, 'subscribe'])
            ->middleware('throttle:5,1')
            ->name('filamentblog.post.subscribe');

Route::get('/category/{category:slug}', [PostController::class, 'categoryPost']);
Route::get('/tags/{tag:slug}', [PostController::class, 'tagPost']);
Route::post('/posts/{post:slug}/comment', [CommentController::class, 'comment']);
