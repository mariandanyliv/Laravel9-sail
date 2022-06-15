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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('categories', \App\Http\Controllers\CategoryController::class)
        ->middleware('is_admin');

    Route::resource('posts', \App\Http\Controllers\PostController::class);
});

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])
    ->name('home');
Route::get('post/{post}',
    [\App\Http\Controllers\PostController::class, 'show'])->name('post.show');

require __DIR__.'/auth.php';
