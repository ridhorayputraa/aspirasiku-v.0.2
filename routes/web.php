<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Users;
use App\Http\Controllers\UsersController;
use App\Models\Messages;
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

Route::get('/', [MessagesController::class, 'index']);

Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/{categories:slug}', [MessagesController::class, 'show']);
Route::get('/author/{users:username}', [UsersController::class, 'show']);

// cari slug yang slug nya samaa dengan parameter
// return view('post', [
//     'title' => 'single post',
//     'post' => Post::find($slug)
// ]);


