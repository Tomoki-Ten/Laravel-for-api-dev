<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\PostController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::apiResource('posts',PostController::class);
Route::get('/v1/posts',[PostController::class,'index'])
->name('posts.index');
Route::post('/v1/posts',[PostController::class,'store'])
->name('posts.store');
Route::get('/v1/posts/{post}',[PostController::class,'show'])
->name('posts.show');
Route::put('/v1/posts/{post}',[PostController::class,'update'])
->name('posts.update');
Route::delete('/v1/posts/{post}',[PostController::class,'destroy'])
->name('posts.destroy');
