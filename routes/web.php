<?php

use App\Http\Controllers\ArticlesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProfController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaqController;

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


Route::get('/', [WelcomeController::class, 'show']);
Route::get('/about', [ProfileController::class, 'show']);
Route::get('/blog', [BlogController::class, 'show']);
Route::get('/posts/{post}', [PostsController::class, 'show']);
Route::get('/articles/{article}', [ArticlesController::class, 'show']);
Route::get('/articles', [ArticlesController::class, 'index']);
Route::get('/prof', [ProfController::class, 'show']);
Route::get('/feedback', [FeedbackController::class, 'show']);
Route::get('/dashboard', [DashboardController::class, 'show']);
Route::get('/faq', [FaqController::class, 'show']);
