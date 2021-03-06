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


Route::get('/', 'App\Http\Controllers\PagesController@index');
Route::get('/about', 'App\Http\Controllers\PagesController@about');
Route::resource('posts', 'App\Http\Controllers\PostsController');


/*
Route::get('/users/{id}/{name}', function($id, $name){
    return 'This is user ' .$name. ' with an id of ' .$id;
});
*/

Auth::routes();
Route::get('/dashboard', [DashboardController::class, 'index']); 

Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index');
