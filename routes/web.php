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
Route::get('/', [App\Http\Controllers\WelcomeController::class ,'index'])->name('welcome');
Route::get('/about', [App\Http\Controllers\AboutController::class ,'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\ContactController::class ,'contact'])->name('contact');
Route::get('/post', [App\Http\Controllers\PostController::class ,'post'])->name('post');
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('about', function () {
//     return view('about');
// });
// Route::get('contact', function () {
//     return view('contact');
// });
// Route::get('post', function () {
//     return view('post');
// });
