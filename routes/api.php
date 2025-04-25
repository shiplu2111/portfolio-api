<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\FrontendController;
use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\ResumeController;
use App\Http\Controllers\Api\SettingController;
use App\Http\Controllers\Api\ServiceController;

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

Route::get('/heros', [FrontendController::class, 'hero']);

Route::get('/blogs', [PostController::class, 'index']);
Route::get('/blog/search', [PostController::class, 'search']);
Route::get('/blog/{post:slug}', [PostController::class, 'show']);
Route::post('/subscribe', [PostController::class, 'subscribe'])
            ->middleware('throttle:5,1')
            ->name('filamentblog.post.subscribe');

Route::get('/categories', [PostController::class, 'categories']);
Route::get('/category/{category:slug}', [PostController::class, 'categoryPost']);
Route::get('/tags', [PostController::class, 'tags']);

Route::get('/tags/{tag:slug}', [PostController::class, 'tagPost']);
Route::post('/posts/{post:slug}/comment', [PostController::class, 'comment']);

Route::get('/counters', [FrontendController::class, 'counters']);
Route::get('/about-me', [FrontendController::class, 'aboutMe']);
Route::get('/skills', [FrontendController::class, 'skills']);


Route::get('/services', [ServiceController::class, 'index']);
Route::get('/pricing-plans', [ServiceController::class, 'pricingPlans']);
Route::get('/clients', [ServiceController::class, 'clients']);



Route::get('/certificates', [ResumeController::class, 'certificates']);
Route::get('/education', [ResumeController::class, 'education']);
Route::get('/experiances', [ResumeController::class, 'experiances']);
Route::get('/resumes', [ResumeController::class, 'index']);
Route::get('/trainings', [ResumeController::class, 'trainings']);


Route::get('/project-categories', [ProjectController::class, 'projectCategories']);
Route::get('/projects', [ProjectController::class, 'index']);
Route::get('/testimonials', [ProjectController::class, 'testimonials']);


Route::get('/faq', [SettingController::class, 'faq']);
Route::get('/general-settings', [SettingController::class, 'index']);
Route::get('/texts', [SettingController::class, 'texts']);
