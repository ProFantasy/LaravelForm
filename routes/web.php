<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('add-blog-post-form', [PostController::class, 'index']);
Route::post('store-form', [PostController::class, 'store']);
Route::get('baca', [PostController::class, 'baca']);
Route::get('delete/{id}', function($id){
    $model=Post::find($id);
    $model -> delete();
    return redirect('baca')->with('status', 'Blog Post Form Data Has Been Deleted');
});
