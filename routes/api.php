<?php

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::get('/posts', function(){
    return Post::all();
});

Route::post('posts', function(){
    return Post::create([
        'title' => request('title'),
        'body' => request('body'),
        'user_id' => request('user_id'),
        'cover_image' => request('cover_image'),
        'category' => request('category'),
    ]);
});

Route::put('/posts/{post}', function(Post $post){

    $post->update([
        'title' => request('title'),
        'body' => request('body'),
        'user_id' => request('user_id'),
        'cover_image' => request('cover_image'),
        'category' => request('category'),
    ]);
});

Route::delete('/posts/{post}', function(Post $post){
    
    $post->delete();
    
});
