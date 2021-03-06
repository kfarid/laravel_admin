<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Auth;
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

Route::redirect('/login', 'login');
Route::get('home',function () {
    return view('home');
});

Auth::routes();

/*
Route::get('/',[\App\Http\Controllers\Admin\PageController::class,'index']);
Route::get('show/{slug}',[\App\Http\Controllers\Admin\PageController::class,'show'])->name('show');*/
/*middleware( ['roles:admin'])->*/
Route::prefix('admin_panel')->group( function () {
    Route::get('/',[\App\Http\Controllers\Admin\HomeController::class,'index'])->name('homeAdmin');
    Route::resource('category', \App\Http\Controllers\Admin\CategoryController::class);
    Route::resource('post', \App\Http\Controllers\Admin\PostController::class);
    Route::resource('user', \App\Http\Controllers\Admin\UserController::class);
    Route::resource('contact', \App\Http\Controllers\Admin\ContactController::class);
    Route::resource('roles', \App\Http\Controllers\Admin\RoleController::class);
    Route::resource('contactform',\App\Http\Controllers\Admin\ContactFormController::class);
});

Route::prefix('/')->group(function (){
    Route::get('/',[\App\Http\Controllers\Admin\PageController::class,'index'])->name('index');
    Route::get('show/{slug}',[\App\Http\Controllers\Admin\PageController::class,'show'])->name('show');
});

Route::get('/contact-form', [App\Http\Controllers\ContactController::class, 'contactForm'])->name('contact-form');
Route::post('/contact-form', [App\Http\Controllers\ContactController::class, 'storeContactForm'])->name('contact-form.store');
