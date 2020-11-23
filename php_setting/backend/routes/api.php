<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\PostController;
use App\Http\Controllers\API\ImageController;

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
Route::get('/v1/posts/{post}',[PostController::class,'search'])
->name('posts.search');
// Route::get('/v1/posts/{post}',[PostController::class,'show'])
// ->name('posts.show');
Route::put('/v1/posts/{post}',[PostController::class,'update'])
->name('posts.update');
Route::delete('/v1/posts/{post}',[PostController::class,'destroy'])
->name('posts.destroy');



// Route::apiResource('images',ImageController::class);

Route::get('/v1/images',[ImageController::class,'index'])->name('images.index');
Route::get('/v1/images/{image}',[ImageController::class,'show'])->name('images.show');
Route::post('/v1/images',[ImageController::class,'store'])->name('images.store');
Route::put('/v1/images/{image}',[ImageController::class,'update'])->name('images.update');
Route::delete('/v1/images/{image}',[ImageController::class,'destroy'])->name('images.destroy');