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

Route::get('/', function () {
    return view('welcome');
});

// Get
Route::get('/blog', [PostsController::class, 'index']);
Route::get('/blog/1', [PostsController::class, 'show']);

//Post
Route::get('/blog/create', [PostsController::class, 'create']);
Route::post('/blog', [PostsController::class, 'store']);


// PUT & PATCH
Route::get('/blog/edit/1', [PostsController::class, 'edit']);
Route::patch('/blog/1', [PostsController::class, 'update']);

// Delete
Route::delete('/blog/1', [PostsController::class, 'destroy']);

// Resource route for all CRUD operations
// Route::resource('blog', PostsController::class);

// Route for single action controllers
Route::get('/', HomeController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
