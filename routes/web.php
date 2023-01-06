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
Route::get('storage_link', function () {
    Artisan::call('storage:link');
});

Route::get('/', [HomeController::class, 'index'])->name('home.index');

//Client
Route::get('/', [App\Http\Controllers\Client\HomeController::class, 'index'])->name('home');
Route::get('/aboutus', [App\Http\Controllers\Client\HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/menu', [App\Http\Controllers\Client\HomeController::class, 'menu'])->name('menu');
Route::get('/menusignature', [App\Http\Controllers\Client\HomeController::class, 'menusignature'])->name('menusignature');
Route::get('/menudetail', [App\Http\Controllers\Client\HomeController::class, 'menudetail'])->name('menudetail');
Route::get('/blog', [App\Http\Controllers\Client\HomeController::class, 'blog'])->name('blog');
Route::get('/contact', [App\Http\Controllers\Client\HomeController::class, 'contact'])->name('contact');
