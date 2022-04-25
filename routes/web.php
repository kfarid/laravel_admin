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

Route::redirect('/', 'login');
Route::get('home',function () {
    return view('home');
});

Auth::routes();



Route::get('/admin', 'AdminController@index')->name('admin');

Route::middleware( ['role:admin'])->prefix('admin_panel')->group( function () {
    Route::get('/',[\App\Http\Controllers\Admin\HomeController::class,'index'])->name('homeAdmin');
    Route::resource('category', \App\Http\Controllers\Admin\CategoryController::class);
    Route::resource('post', \App\Http\Controllers\Admin\PostController::class);
    Route::resource('user', \App\Http\Controllers\Admin\UserController::class);

});
