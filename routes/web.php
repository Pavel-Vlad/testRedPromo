<?php

use App\Http\Controllers\PostController;
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

Route::get('/', [PostController::class, 'index']);
Route::get('/news-all', [PostController::class, 'all']);
Route::get('/news-all/{city}', [PostController::class, 'fromCity']);
Route::get('/news-item/{id}', [PostController::class, 'single']);
Route::post('/findnews', [PostController::class, 'find']);
Route::get('/to-favor/{id}', [PostController::class, 'toFavor']);
